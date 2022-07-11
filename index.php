<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>Web giày</title>
</head>
<body>
	<div class="wrapper">
		<div class="logo">
			<ul>
			<li style="margin-left: 50em;"><a href="index.php"><img src="images/logo.png"></a></li>
				<div class="logo_small">
					<li style="margin-left: 20em;">
						<form action="index.php?quanly=timkiem" method="POST">
						<input style="width: 213px; box-sizing: border-box; border: 1px solid black; border-radius:16px; outline:none;padding: 11px 18px;" type="text" placeholder="search..." name="tukhoa">
						<button style="width: 40px;position: relative;left: -45px; height: 35px; padding: 7px;border: none; background: none; color: #000;" type="submit" name="timkiem"><i class="fas fa-search"></i></button>
						</form>
					</li>
					<li><a href="index.php?quanly=giohang"><i class="fas fa-shopping-cart"></i></a></li>
						
					<li><a href="https://www.facebook.com/toan.quang.3705157"><i class="fab fa-facebook-square"></i></a></li>
					<li><a href="https://www.instagram.com/toantrinh3003/"><i class="fab fa-instagram"></i></a></li>
					
				</div>
			</ul>
		</div>
		<?php
		session_start();
		include("admincp/config/config.php");
		include("pages/menu.php");
		include("pages/main.php");
		include("pages/footer.php");
		?>	
	</div>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>