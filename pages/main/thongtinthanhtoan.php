<div class="container">
  <!-- Responsive Arrow Progress Bar -->
  <div class="arrow-steps clearfix">
    <div class="step done"> <span> <a href="index.php?quanly=giohang" >Giỏ hàng</a></span> </div>
    <div class="step done"> <span><a href="index.php?quanly=vanchuyen" >Vận chuyển</a></span> </div>
    <div class="step current"> <span><a href="index.php?quanly=thongtinthanhtoan" >Thanh toán</a><span> </div>
  </div>
<form>
  <div class="row">
  	<?php
  		$id_dangky = $_SESSION['id_khachhang'];
  		$sql_get_vanchuyen = mysqli_query($mysqli,"SELECT * FROM tbl_shipping WHERE id_dangky='$id_dangky' LIMIT 1");
  		$count = mysqli_num_rows($sql_get_vanchuyen);
  		if($count>0){
  			$row_get_vanchuyen = mysqli_fetch_array($sql_get_vanchuyen);
  			$name = $row_get_vanchuyen['name'];
  			$phone = $row_get_vanchuyen['phone'];
  			$address = $row_get_vanchuyen['address'];
  			$note = $row_get_vanchuyen['note'];
  		}else{
  			$name = '';
  			$phone = '';
  			$address = '';
  			$note = '';
  		}
  	?>
  	<div class="col-md-8">
  		<h4>Thông tin vận chuyển và giỏ hàng</h4>
  		<ul>
  			<li>Họ và tên vận chuyển: <b><?php echo $name ?></b></li>
  			<li>Số điện thoại: <b><?php echo $phone ?></b></li>
  			<li>Địa chỉ: <b><?php echo $address ?></b></li>
  			<li>Ghi chú: <b><?php echo $note ?></b></li>
  		</ul>	
  		<table class="tbgiohang" style ="width:100%; text-align:center; border-collapse: collapse;" border= "2">
			      <tr>
			          <th>Id</th>
			          <th>Mã sp</th>
			          <th>Tên sản phẩm</th>
			          <th>Hình ảnh</th>
			          <th>Số lượng</th>
			          <th>Giá sản phẩm</th>
			          <th>Thành tiền</th>
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
			    </tr>
			 <?php
			  }
			 ?>
			    <tr>
			        <td colspan="8">
			            <p style="margin-left: 30em; color: #EE0000;">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnd'; ?></p>
			            <div style="clear:both;"></div>
			          <?php
			          if(isset($_SESSION['dangky'])){
			            ?>
			            
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
  	</div>
  	<div class="col-md-4 hinhthucthanhtoan">
  		<h4>Phương thức thanh toán</h4>
		<button class="btn-danger"><a style="text-decoration: none; color: #fff;" href="index.php?quanly=thanhtoan">Thanh toán khi nhận được hàng</a></button>

		</form>
		<?php
		$tongtien = 0;
		foreach ($_SESSION['cart'] as $key => $value) {
			$thanhtien = $value['soluong']=$value['giasp'];
			$tongtien+=$thanhtien;
		}
		$tongtien_vnd=$tongtien;
		?>
		 <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="pages/main/xulythanhtoanmomo.php">
            <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
            <input type="submit" name="momo" value="Thanh toán MoMo QRcode" class="btn-danger">            	
          </form>
         </form>
		 <form class="" method="POST" target="_blank" enctype="application/x-www-form-urlencoded"
                          action="pages/main/xulythanhtoanmomo_atm.php">
            <input type="hidden" value="<?php echo $tongtien_vnd ?>" name="tongtien_vnd">
            <input type="submit" name="momo" value="Thanh toán MoMo ATM" class="btn-danger">            	
          </form>
  	</div>
  </div>
</div>
