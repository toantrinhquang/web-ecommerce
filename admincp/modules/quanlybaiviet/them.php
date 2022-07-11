<h3 style="text-align: center;">Thêm bài viết</h3>
<table class="themsanpham" border="1px" width="100%" style="border-collapse:collapse;">
  <form method="POST" action="modules/quanlybaiviet/xuly.php" enctype="multipart/form-data">
	  <tr>
	    <td>Tên bài viết</td>
	    <td><input style="width: 100%" type="text" name="tenbaiviet"></td>
	  </tr>
	   <tr>
	    <td>Hình ảnh</td>
	    <td><input style="width: 100%" type="file" name="hinhanh"></td>
	  </tr>
	  <tr>
	    <td>Tóm tắt</td>
	    <td><textarea style="width: 100%" rows="3" name="tomtat" style="resize: none;"></textarea></td>
	  </tr>
	   <tr>
	    <td>Nội dụng</td>
	    <td><textarea style="width: 100%" rows="3" name="noidung" style="resize: none;"></textarea></td>
	  </tr>
	  <tr>
	  	<td>Danh mục bài viết</td>
	    <td>
	    	<select name="danhmuc">
				<?php
				$sql_danhmuc = "SELECT * FROM tbl_danhmucbaiviet ORDER BY id_baiviet DESC";
				$query_danhmuc= mysqli_query($mysqli,$sql_danhmuc);
				while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
					?>
					<option value ="<?php echo $row_danhmuc ['id_baiviet'] ?>"><?php echo $row_danhmuc ['tendanhmuc_baiviet'] ?></option>
					<?php
				}
				?>
	    		<option value="1">Kích hoạt</option>
	    	</select>
	    </td>
	  </tr>
	  <tr>
	  	<td>Tình trạng</td>
	    <td>
	    	<select name="tinhtrang">
	    		<option value="1">Kích hoạt</option>
	    		<option value="0">Ấn</option>
	    	</select>
	    </td>
	  </tr>
	  <tr>
	    <td colspan="2"><input class="btthemsanpham" type="submit" name="thembaiviet" value="Thêm bài viết"></td>
	  </tr>
  </form>
</table>