<?php 
	session_start();
    include('admincp/config/config.php');
    require('mail/sendmail.php');
	$id_khachhang = $_SESSION['id_khachhang'];
	$code_oder = rand(0,9999); 
	$insert_cart = "INSERT INTO tbl_cart(id_khachhang,code_cart,cart_status) VALUE('".$id_khachhang."','".$code_oder."',1)";
	$cart_query = mysqli_query($mysqli,$insert_cart);
	if ($cart_query){
	 	//them gio hang chi tiet 
	 	foreach ($_SESSION['cart'] as $key => $value) {
	 		$id_sanpham = $value['id'];
	 		$soluong = $value['soluong'];
	 		$insert_order_details = "INSERT INTO tbl_cart_details(id_sanpham,code_cart,soluongmua) VALUE('".$id_sanpham."','".$code_oder."','".$soluong."')";
	 		mysqli_query($mysqli,$insert_order_details);
	 	}
	 	$tieude = "Đặt hàng website GiayTTshop.net thành công!";
	 	$noidung = "<p>Cảm ơn quý khách đã đặt hàng với mã đơn hàng: ".$code_oder."</p><br><h4>Đơn hàng bao gồm: </h4>";

	 	foreach ($_SESSION['cart'] as $key => $val) {
	 		$noidung.= "<ul style='border:1px blue;margin:10px;'>
	 					<li>Tên sản phẩm: ".$val['tensanpham']."</li>
	 					<li>Mã sản phẩm: ".$val['masp']."</li>
	 					<li>Giá: ".number_format($val['giasp'],0,',','.')."đ</li>
	 					<li>Số lượng: ".$val['soluong']."</li>
	 					</ul>";
	 	}
	 	$maildathang = $_SESSION['email'];
	 	$mail = new Mailer();
	 	$mail -> dathangmail($tieude,$noidung,$maildathang);
	 } 
	 unset($_SESSION['cart']);
	 header("Location:index.php?quanly=camon");

?>
