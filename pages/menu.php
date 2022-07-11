<?php
	  $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
	  $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
	  
?>
<?php
if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
	unset($_SESSION['dangky']);
}
?>
<div class="menu">
			<ul class="list_menu">
				<li><a href="index.php"><i class="fas fa-home" style="font-size: 20px"></i>Trang chủ</a></li>
				<li><a href=""> <i class="fas fa-shopping-bag"></i> Sản phẩm</a>
					<ul class="submenu">
						<?php
						while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
						?>
						<li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
						<?php
					    }
						?>
					</ul>
				</li>
				<li><a href="index.php?quanly=tintuc"><i class="far fa-newspaper"></i> Tin tức</a></li>
				<li><a href="index.php?quanly=dangnhap"><i class="fas fa-sign-in-alt"></i> Đăng nhập</a></li>
					<?php
					if(isset($_SESSION['dangky'])){
						?>
						<li ><a href="index.php?dangxuat=1"><i class="fas fa-sign-out-alt"></i> Đăng xuất </a></li>
						<?php
					}else{
						?>
						<li><a href="index.php?quanly=dangky"><i class="far fa-user"></i> Đăng ký</a></li>
					<?php
					}
					?>	
			</ul>

</div>