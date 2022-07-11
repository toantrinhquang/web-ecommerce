<?php
      $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC";
      $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
?>


<h3 style="text-align: center;">Liệt kê danh mục sản phẩm</h3>

<table class="lietkedanhmuc" style="width: 50%;border-collapse: collapse;text-align: center" border="1">
  <tr>
  	<th>Id</th>
    <th>Tên danh mục</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while ($row = mysqli_fetch_array($query_lietke_danhmucsp)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td>
    	<a href="modules/quanlydanhmucsp/xuly.php?iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><i class="fas fa-trash-alt"></i></a> | <a href="?action=quanlydanhmucsanpham&query=sua&iddanhmuc=<?php echo $row['id_danhmuc'] ?>"><i class="fas fa-hammer"></i></a>
    </td>
  </tr>
  <?php
  }
  ?>

</table>