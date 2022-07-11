<?php

    if(isset($_POST['dangnhap'])){
        $email = $_POST['email'];
        $matkhau = md5($_POST['password']);
        $sql = "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
        $row = mysqli_query($mysqli,$sql);
        $count = mysqli_num_rows($row);
        if($count>0){
            $row_data= mysqli_fetch_array($row);
            $_SESSION['dangky'] = $row_data['tenkhachhang'];
            $_SESSION['email'] = $row_data['email'];
            $_SESSION['id_khachhang'] = $row_data['id_dangky'];
            header("Location:index.php?quanly=giohang");
        }else{
            echo '<p style="color:red;text-align: center;">Mật khẩu hoặc Email sai, vui lòng nhập lại</p>';

        }
    } 
?>
<p class="title">Đăng nhập</p>
<div class="login">
<form action="" autocomplete="off" method="POST">
    <h2 style="color: #868787; font-family: sans-serif;padding-top: 64px;">Member login</h2>
    <input type="text" name="email" placeholder="email...">
    <input type="password" name="password" placeholder="password...">
    <button type="submit" name="dangnhap">Đăng nhập</button>
</form>
</div>