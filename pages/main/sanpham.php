<p class="title">Chi tiết sản phẩm</p>
<?php
$sql_chitiet = "SELECT * FROM  tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham='$_GET[id]' LIMIT 1";
$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
while($row_chitiet = mysqli_fetch_array($query_chitiet)) {
?>

<div class="wrapper_chitiet">
	<div class="hinhanh_sanpham">
		<img width="100%" src="admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh']?>">
	</div>
	<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
	<div class="chitiet_sanpham">
		<h3 style="font-size: 40px;margin-top: 50px;margin-bottom: 50px;">Tên sản phẩm: <?php echo $row_chitiet['tensanpham'] ?></h3>
		<h5>Giá: <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnd'?></h3>
		<h5>Mã sẩn phẩm: <?php echo $row_chitiet['masp'] ?></h3>
		<h5>Số lượng sẩn phẩm còn: <?php echo $row_chitiet['soluong'] ?></h3>
		<h5>Hãng sản xuất: <?php echo $row_chitiet['tendanhmuc'] ?></h3>
		<button class="muasanpham" name="themgiohang" onClick="javascript:alert('Sản phẩm đã thêm vào giỏ hàng!') ">Mua ngay</button>
	</div>
	</form>
</div>

<?php
}
?>