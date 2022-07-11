<h3 style="margin-top:4em; text-align: center;">Liệt kê đơn hàng</h3>
<?php
      $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_dangky WHERE tbl_cart.id_khachhang=tbl_dangky.id_dangky ORDER BY tbl_cart.id_cart DESC";
      $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
?>

<table style="width: 55%;border-collapse:collapse; margin: 0 auto; " border="1">
  <tr>
  	<th>Id</th>
    <th>Mã đơn hàng</th>
    <th>Tên khách hàng</th>
    <th>Địa chỉ</th>
    <th>Email</th>
    <th>Số điện thoại</th>
    <th>Tình trạng</th>
    <th>Quản lý</th>
    <th>In hóa đơn</th>
  </tr>
  <?php
  $i = 0;
  while ($row = mysqli_fetch_array( $query_lietke_dh)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>  	
    <td><?php echo $row['code_cart'] ?></td>
    <td><?php echo $row['tenkhachhang'] ?></td>
    <td><?php echo $row['diachi'] ?></td>
    <td><?php echo $row['email'] ?></td>
    <td><?php echo $row['dienthoai'] ?></td>
    <td>
    	<?php if($row['cart_status']==1){
    		echo '<a href="modules/quanlydonhang/xuly.php?code='.$row['code_cart'].'">Đơn chưa xử lý</a>';
    	}else{
    		echo 'Đã xử lý';
    	}
    	?>
    </td>
    <td>
    	<a href="index.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
    </td>
    <td><a href="index.php?action=inhoadon&query=inan&code=<?php echo $row['code_cart'] ?>">In ấn</a></td>
    
  </tr>
  <?php
  }
  ?>

</table>