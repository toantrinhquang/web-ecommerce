
<?php
$code = $_GET['code'];
if (isset($code)) {
	
}
$sql="SELECT a.code_cart, USER.tenkhachhang, USER.diachi,USER.dienthoai FROM tbl_cart a, tbl_dangky user
where a.id_khachhang = user.id_dangky
and a.code_cart = '$code' LIMIT 1 ";
$result = mysqli_query($mysqli, $sql);
$row = $result->fetch_row();
// binding data to value
$code_cart = $row[0];
$tenkhachhang = $row[1];
$diachi = $row[2];
$dienthoai = $row[3];

?>
<body class="hoadon" onload="window.print();">
<div class="form__tong" >
 <div class="hoadonphu" >
	<ul>
		<h2 style="text-align: center;font-style: italic;"> Cửa hàng:Tiệm Giày của Toàn</h2>
		<li>Địa chỉ:7 Đinh Tiên Hoàng, Hàng Trống, Hoàn Kiếm, Hà Nội</li>
		<li style="margin-right: 4.5em;">Website: TTshop.com</li>
		<li style="margin-right: 6.5em;">hotline: 0235565</li>
		<li style="float: right;font-size: 20px;color: red">Đơn hàng: <?php echo $code_cart;?></li>
	</ul>
	<ul>
		<h1 style="text-align: center;">Hóa Đơn Bán Lẻ</h1>
		<li>Tên Khách hàng: <?php echo $tenkhachhang; ?></li>
		<li style="margin-right: 107px;">ĐT: <?php echo $dienthoai; ?></li>
		<li style="margin-right: 93px;">Địa chỉ: <?php echo $diachi; ?></li>
	</ul>
<?php
      $sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_sanpham WHERE tbl_cart_details.id_sanpham=tbl_sanpham.id_sanpham AND tbl_cart_details.code_cart='$code' ORDER BY tbl_cart_details.id_cart_details DESC";
      $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>

	<table>
		<tr>
			<th>Số TT</th>
			<th>Tên sản phẩm</th>
			<th>Số lượng</th>
			<th>Đơn giá </th>
			<th>Thành tiền</th>
		</tr>
		<?php
		  $i = 0;
		  $tongtien = 0;
		  while ($row = mysqli_fetch_array( $query_lietke_dh)){
		  	$i++;
		  	$thanhtien = $row['giasp']*$row['soluongmua'];
		  	$tongtien += $thanhtien; 
		  ?>
		<tr>
			<td><?php echo $i ?></td>  	
		    <td><?php echo $row['tensanpham'] ?></td>
		    <td><?php echo $row['soluongmua'] ?></td>
		    <td><?php echo number_format($row['giasp'],0,',','.').' VND' ?></td>
		    <td><?php echo number_format($thanhtien,0,',','.').' VND' ?></td>
		</tr>
		<?php
		  }
		  ?>
		<tr style="color: red;" ><td colspan="5"> Tổng Tiền:<?php echo number_format($tongtien,0,',','.').' VND' ?></td></tr>
	</table>

 </div>
</div>
</body>