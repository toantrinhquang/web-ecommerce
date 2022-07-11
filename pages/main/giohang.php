
<h3 class="title">Giỏ hàng
  <?php
  if(isset($_SESSION['dangky'])){
    echo 'của:'.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
  }
  ?>
</h3>
<?php
      if(isset($_SESSION['cart']))
?>

<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step current"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
  </div>
</div>  

<table class="tbgiohang" style ="width:100%; text-align:center; border-collapse: collapse;" border= "2">
      <tr>
          <th>Id</th>
          <th>Mã sp</th>
          <th>Tên sản phẩm</th>
          <th>Hình ảnh</th>
          <th>Số lượng</th>
          <th>Giá sản phẩm</th>
          <th>Thành tiền</th>
          <th>Quản lý</th>
      </tr>

  <?php
     if(isset($_SESSION['cart'])){
           $i=0;
           $tongtien=0;
           foreach($_SESSION['cart'] as $cart_item){
                $thanhtien = $cart_item['soluong'] *$cart_item['giasp'];
                $tongtien+=$thanhtien;
                $i++;
  ?>
    <tr>
          <td><?php echo $i; ?></td>
          <td><?php echo $cart_item['masp']; ?></td>
          <td><?php echo $cart_item['tensanpham']; ?></td>
          <td><img src="admincp/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="250px"></td>
          <td>
            <a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fas fa-plus"></i></a>
            <?php echo $cart_item['soluong']; ?>
            <a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fas fa-minus"></i></a>     
          </td>
          <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnd'; ?></td>
          <td><?php echo number_format($thanhtien,0,',','.').'vnd'; ?></td>
          <td><a onClick="javascript:alert('Đã xóa sản phẩm')" href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>"><i class="fas fa-trash-alt"></i></a></td>
    </tr>
 <?php
  }
 ?>
    <tr>
        <td colspan="8">
            <button class="btnback"><a style="text-decoration: none; color: #fff;font-size: 20px;" href="index.php">< Tiếp tục mua hàng</a></button>
            <p style="float: right; margin-right: 40px;"><a href="pages/main/themgiohang.php?xoatatca=1" style="text-decoration: none; font-size: 20px; color: #EE0000;">Xóa tất cả</a></p>
            <p style="margin-left: 92em; color: #EE0000; text-decoration-line: underline; ">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnd'; ?></p>
            <div style="clear:both;"></div>
          <?php
          if(isset($_SESSION['dangky'])){
            ?>
            <p><a href="index.php?quanly=vanchuyen">Hình thức vận chuyển</a></p>
            <?php
          }else{
            ?>
            <p  style="font-style: italic;" ><a href ="index.php?quanly=dangky">Đăng ký đặt hàng</a></p>
          <?php
          }
          ?>

        </td>
    </tr>
    <?php
   }else{
    ?>
      <tr>
        <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
      </tr>
      <button class="btnback"><a style="text-decoration: none; color: #fff;" href="index.php">Quay Lại trang chủ</a></button>
   <?php
   }
   ?> 
</table>
      
