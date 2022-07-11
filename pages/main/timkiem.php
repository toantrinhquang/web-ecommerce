<?php
if(isset($_GET['trang'])){
	$page = $_GET['trang'];
}else{
	$page = '';
}
if ($page == '' || $page == 1){
	$begin = 0;
}else{
	$begin = ($page*15)-15;
}


if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);

?>

<p class="title">Từ khóa tìm kiếm : <?php echo $_POST['tukhoa']; ?></p>

	<ul class="product_list">	
        <?php
            while ($row = mysqli_fetch_array($query_pro)){  
	    ?>
		<li>
			<a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
			<img src="admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh']?>">
			<p class ="title_product"> Tên sản phẩm:<?php echo $row['tensanpham']?></p>
			<p class="prince_product">Giá:<?php echo number_format($row['giasp'],0,',','.').'vnd'?></p>
		    </a>
		    </li>	
		<?php
		}
		?>
	</ul>
	<div style="clear: both;"></div>

	
	<?php
	$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_sanpham");
	$row_count = mysqli_num_rows($sql_trang);
	$trang = ceil($row_count/15);
	?>
	<ul class="list_trang">
		<li><a>Trang số:</a></li>
		<?php
		for ($i=1;$i<=$trang;$i++){
		?>
		<li <?php if($i==$page){echo 'style="background: #777777;"';}else{echo '';} ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i ?></a></li>
		<?php
	    }
		?>
    </ul>