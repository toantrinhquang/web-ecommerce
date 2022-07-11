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

$sql_pro = "SELECT * FROM  tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT $begin,15";
$query_pro= mysqli_query($mysqli,$sql_pro);
?>
<div class="header">
	<!-- <img src="images/baner4.png"> -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<div class="carousel-item active">
			<img class="d-block w-100" src="images/baner4.png" alt="First slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="images/baner2.png" alt="Second slide">
		</div>
		<div class="carousel-item">
			<img class="d-block w-100" src="images/baner3.png" alt="Third slide">
		</div>
	</div>
	<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	</div>
</div>
<p class="title">Trang chủ</p>

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
    
    