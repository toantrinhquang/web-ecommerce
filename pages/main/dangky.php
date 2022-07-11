<?php

    if(isset($_POST['dangky'])){
        $tenkhachhang = $_POST['hovaten'];
        $email = $_POST['email'];
        $dienthoai = $_POST['dienthoai'];
        $matkhau = md5($_POST['matkhau']);
        $diachi = $_POST['diachi'];

        $sql_dangky=mysqli_query($mysqli,"INSERT INTO tbl_dangky(tenkhachhang,email,diachi,matkhau,dienthoai) VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$matkhau."','".$dienthoai."')");
        if($sql_dangky){
            
            echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
            $_SESSION['dangky'] = $tenkhachhang;
            $_SESSION['email'] = $email; 
            $_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
            header('Location:index.php?quanly=giohang');
        }
    }
?>

<p class="title">Đăng kí</p>
<div class="sign_up">
<form action="" method="POST">
    <h2 style="color: #868787; font-family: sans-serif;">Register member</h2>
    <input type ="text" size="50" name ="hovaten" placeholder="Nhập họ và tên">
    <input type ="text" size="50" name ="email" placeholder="Nhập email">
    <input type ="text" size="50" name ="dienthoai" placeholder="Nhập số điện thoại">
    <input type ="text" size="50" name ="diachi" placeholder="Nhập địa chỉ">
    <input type ="password" size="50" name ="matkhau" placeholder="Nhập mật khẩu"> 
    <button type ="submit" name ="dangky">Đăng ký</button></br>
    <a href ="index.php?quanly=dangnhap">Đăng nhập nếu có tài khoản</a>
</form>
</div>