<?php
      $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[iddanhmuc]' LIMIT 1";
      $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
?>

<h3 style="text-align: center;">Sửa danh mục sản phẩm</h3>
<table border="1px" width="20%" style="border-collapse:collapse;margin-left: 47em;">
  <form method="POST" action="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $_GET['iddanhmuc'] ?>">
  	<?php
    while($dong = mysqli_fetch_array( $query_sua_danhmucsp)){
  	?>
	  <tr>
	    <td style="font-weight: bold;">Tên danh mục</td>
	    <td><input type="text" style="width: 100%;font-size: 17px;" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc"></td>
	  </tr>
	  <tr>
	  	<td style="font-weight: bold;">Thứ tự</td>
	    <td><input type="text" style="width: 100%;font-size: 17px;" value="<?php echo $dong['thutu'] ?>" name="thutu"></td>
	  </tr>
	  <tr>
	    <td colspan="2"><input class="btnsuadanhmuc" type="submit" name="suadanhmuc" value="Sửa danh mục sẩn phẩm"></td>
	  </tr>
	<?php
	}
	?>

  </form>
</table>