<?php
	$sql_sua_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet WHERE id_baiviet='$_GET[idbaiviet]' LIMIT 1";
	$query_sua_danhmucbv = mysqli_query($mysqli,$sql_sua_danhmucbv);
?>

<h3 style="text-align: center;">Sửa danh mục sản phẩm</h3>
<table border="1px" width="20%" style="border-collapse:collapse;margin-left: 47em;">
  <form method="POST" action="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $_GET['idbaiviet'] ?>">
  	<?php
    while($dong = mysqli_fetch_array( $query_sua_danhmucbv)){
  	?>
	  <tr>
	    <td style="font-weight: bold;">Tên danh mục bài viết</td>
	    <td><input type="text" style="width: 100%;font-size: 17px;" value="<?php echo $dong['tendanhmuc_baiviet'] ?>" name="tendanhmucbaiviet"></td>
	  </tr>
	  <tr>
	  	<td style="font-weight: bold;">Thứ tự</td>
	    <td><input type="text" style="width: 100%;font-size: 17px;" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
	  </tr>
	  <tr>
	    <td colspan="2"><input class="btnsuadanhmuc" type="submit" name="suadanhmucbaiviet" value="Sửa danh bài viết"></td>
	  </tr>
	<?php
	}
	?>

  </form>
</table>