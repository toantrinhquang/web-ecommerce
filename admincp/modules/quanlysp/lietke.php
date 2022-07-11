<?php
      $sql_lietke_sp = "SELECT * FROM tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
      $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
?>


<h3 style="text-align: center;">Liệt kê sản phẩm</h3>
<table style="width: 100%; border-collapse: collapse;" border="1">
  <tr>
    <th>Id</th>
    <th>Tên sản phẩm</th>
    <th>Hình ảnh</th>
    <th>Giá sp</th>
    <th>Số lượng</th>
    <th>Danh mục</th>
    <th>Mã sp</th>
    <th>Tóm tắt</th>
    <th>Trạng thái</th>
    <th>Quản lý</th>
  </tr>
  <?php
  $i = 0;
  while ($row = mysqli_fetch_array($query_lietke_sp)){
    $i++;
  ?>
  <tr>
    <td><?php echo $i ?></td>
    <td><?php echo $row['tensanpham'] ?></td>
    <td><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>"width="150px"></td>
    <td><?php echo $row['giasp'] ?></td>
    <td><?php echo $row['soluong'] ?></td>
    <td><?php echo $row['tendanhmuc'] ?></td>
    <td><?php echo $row['masp'] ?></td>
    <td><?php echo $row['tomtat'] ?></td>
    <td><?php if($row['tinhtrang']==1){
    echo'Kích hoạt';
    }else{
      echo'Ẩn';
    }
    ?>
    </td>
    <td>
      <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>"><i class="fas fa-trash-alt"></i></a> | <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham']?>"><i class="fas fa-pencil-alt"></i></a>
    </td>
  </tr>
  <?php
  }
  ?>
<form action="modules/xuatexcel.php" method ="POST"><input class="xuatexcel" type="submit" name="export_excel" value="Xuất excel"></form>

<form action="modules/export_database.php" method ="POST"><input class="xuatexcel" type="submit" name="export" value="export data"></form>

<form action="modules/import_database.php" method ="POST"><input class="xuatexcel" type="submit" name="import" value="import data"></form>



</table>
