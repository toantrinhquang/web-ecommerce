<?php
      $sql_lietke_bv = "SELECT * FROM tbl_baiviet, tbl_danhmucbaiviet WHERE tbl_baiviet.id_danhmuc= tbl_danhmucbaiviet.id_baiviet ORDER BY tbl_baiviet.id DESC";
      $query_lietke_bv = mysqli_query($mysqli,$sql_lietke_bv);
?>


<h3 style="text-align: center;">Liệt kê bài viết</h3>
<table style="width: 100%; border-collapse: collapse;" border="1">
  <tr>
    <th>Id</th>
    <th>Tên bài viết</th>
    <th>Hình ảnh</th>
    <th>Danh mục</th>
    <th>Tóm tắt</th>
    <th>Trạng thái</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while ($row = mysqli_fetch_array($query_lietke_bv)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tenbaiviet'] ?></td>
    <td><img src="modules/quanlybaiviet/uploads/<?php echo $row['hinhanh'] ?>"width="150px"></td>
    <td><?php echo $row['tendanhmuc_baiviet'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if($row['tinhtrang']==1){
    echo'Kích hoạt';
    }else{
      echo'Ẩn';
    }
    ?>
    </td>
    <td>
      <a href="modules/quanlybaiviet/xuly.php?idbaiviet=<?php echo $row['id'] ?>"><i class="fas fa-trash-alt"></i></a> | <a href="?action=quanlybaiviet&query=sua&idbaiviet=<?php echo $row['id']?>"><i class="fas fa-pencil-alt"></i></a>
    </td>
  </tr>
  <?php
  }
  ?>

</table>
