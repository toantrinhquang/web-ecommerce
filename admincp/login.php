<?php
	session_start();
	include('config/config.php');
	if(isset($_POST['dangnhap'])){
		$taikhoan = $_POST['username'];
		$matkhau = md5($_POST['password']);
		$sql = "SELECT * FROM tbl_admin WHERE username='".$taikhoan."' AND password='".$matkhau."' LIMIT 1";
		$row = mysqli_query($mysqli,$sql);
		$count = mysqli_num_rows($row);
		if($count>0){
			$_SESSION['dangnhap'] = $taikhoan;
			header("Location:index.php");
		}else{
			echo '<script>alert("Tài khoản hoặc Mật khẩu không đúng,vui lòng nhập lại.");</script>';
			header("Location:login.php");
		}
	} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Đăng nhập Admincp</title>
    <link rel="stylesheet" type="text/css" href="css/styleadmincp.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body style="background-image: url(https://cdn.wallpapersafari.com/81/63/VtEaQF.jpg);">
<div class="login_admincp">
	<form action="" autocomplete="off" method="POST">
			<h1 style="margin-bottom: 50px;margin-top: 100px;">Đăng nhập Admin</h1>
			<a><i style="font-size: 30px" class="fas fa-users-cog"></i></a>
			<input type="text" name="username" placeholder="username..."></br>
			<a><i style="font-size: 32px;margin-right: 8px;" class="fas fa-lock"></i></a>
			<input type="password" name="password" placeholder="password...">	
			<button type="submit" name="dangnhap">Đăng nhập</button>
			
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</body>
</html>