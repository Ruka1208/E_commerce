<h3 class="test grip ">Giỏ hàng </br>
  <?php
  if(isset($_SESSION['user_name'])){
    echo 'xin chào: '.'<span style="color:red">'.$_SESSION['user_name'].'</span>';
    echo 'xin chào: '.'<span style="color:red">'.$_SESSION['id_khachhang'].'</span>';
  } 
  ?>
</h3>
<?php
	if(isset($_SESSION['cart'])){
		
	}
?>
<table class="grip">
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
  	$i = 0;
  	$tongtien = 0;
  	foreach($_SESSION['cart'] as $cart_item){
  		$thanhtien = $cart_item['soluong']*$cart_item['giasp'];
  		$tongtien+=$thanhtien;
  		$i++;
  ?>
  <tr>
    <td><?php echo $i; ?></td>
    <td><?php echo $cart_item['masp']; ?></td>
    <td><?php echo $cart_item['tensanpham']; ?></td>
    <td><img src="admin/modules/quanlysp/uploads/<?php echo $cart_item['hinhanh']; ?>" width="150px"></td>
    <td>
    	<a href="pages/main/themgiohang.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa fa-plus fa-style" aria-hidden="true"></i></a>
    	<?php echo $cart_item['soluong']; ?>
    	<a href="pages/main/themgiohang.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa fa-minus fa-style" aria-hidden="true"></i></a>

    </td>
    <td><?php echo number_format($cart_item['giasp'],0,',','.').'vnđ'; ?></td>
    <td><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></td>
    <td><a href="pages/main/themgiohang.php?xoa=<?php echo $cart_item['id'] ?>">Xoá</a></td>
  </tr>
  <?php
  	}
  ?>
  
   <tr>
    <td class="giohang_content" colspan="8">
      <div class="item_giohang row">
        <p class="item_giohang">Tổng tiền: <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p><br/>
        <p  class="item_giohang"><a href="pages/main/themgiohang.php?xoatatca=1">Xoá tất cả</a></p>
        <div style="clear: both;"></div>
        <?php
          if(isset($_SESSION['user_name'])){
            ?>
            <p><a href="pages/main/thanhtoan.php">Đặt hàng</a></p>
        <?php
          }else{
        ?>
          <p><a href="register.php">Đăng ký để đặt hàng</a></p>
        <?php
          }
        ?>
      </div>
    </td>
  </tr>
  <?php	
  }else{ 
  ?>
   <tr>
    <td colspan="8"><p>Hiện tại giỏ hàng trống</p></td>
   
  </tr>
  <?php
  } 
  ?>
 
</table>
<div class="test">
  <p></p>
</div>

<style>
  .item_giohang{
    justify-content: space-around;
    height: 50px;
  }
  .giohang_content{
    align-items: center;
  }
</style>