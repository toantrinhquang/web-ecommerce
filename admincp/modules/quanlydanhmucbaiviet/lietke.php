<?php
      $sql_lietke_danhmucbv = "SELECT * FROM tbl_danhmucbaiviet ORDER BY thutu DESC";
      $query_lietke_danhmucbv = mysqli_query($mysqli,$sql_lietke_danhmucbv);
?>


<h3 style="text-align: center;">Liệt kê danh mục bài viết</h3>

<table class="lietkedanhmuc" style="width: 50%;border-collapse: collapse;text-align: center" border="1">
  <tr>
  	<th>Id</th>
    <th>Tên danh mục</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while ($row = mysqli_fetch_array($query_lietke_danhmucbv)){
  	$i++;
  ?>
  <tr>
  	<td><?php echo $i ?></td>
    <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
    <td>
    	<a href="modules/quanlydanhmucbaiviet/xuly.php?idbaiviet=<?php echo $row['id_baiviet'] ?>"><i class="fas fa-trash-alt"></i></a> | <a href="?action=quanlydanhmucbaiviet&query=sua&idbaiviet=<?php echo $row['id_baiviet'] ?>"><i class="fas fa-hammer"></i></a>
    </td>
  </tr>
  <?php
  }
  ?>

</table>