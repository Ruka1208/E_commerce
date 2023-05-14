<div class="danhmucsp_lietke">
  <div class="danhmucsp_lietke_title">
    <h3>Xem đơn hàng</h3>
  </div>
  <?php
  //tưng tự bên file liệtke
    $code = $_GET['code'];
    $sql_lietke_dh = "SELECT * FROM tbl_cart_details,tbl_product WHERE tbl_cart_details.id_sanpham=tbl_product.id_sanpham AND tbl_cart_details.code_cart='".$code."' ORDER BY tbl_cart_details.id_cart_details DESC";
    $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
  ?>
    <ul class="danhmucsp_lietke_container row">
      <li>Id</li>
      <li>Mã đơn hàng</li>
      <li>Tên sản phẩm</li>
      <li>Số lượng</li>
      <li>Đơn giá</li>
      <li>Thành tiền</li>
    
    
    </ul>
    <?php
    $i = 0;
    $tongtien = 0;
    while($row = mysqli_fetch_array($query_lietke_dh)){
      $i++;
      $thanhtien = $row['giasp']*$row['soluongmua'];
      $tongtien += $thanhtien ;
    ?>
    <ul class="danhmucsp_lietke_container row">
      <li><?php echo $i ?></li>
      <li><?php echo $row['code_cart'] ?></li>
      <li><?php echo $row['tensanpham'] ?></li>
      <li><?php echo $row['soluongmua'] ?></li>
      <li><?php echo number_format($row['giasp'],0,',','.').'vnđ' ?></li>
      <li><?php echo number_format($thanhtien,0,',','.').'vnđ' ?></li>
    </ul>
    <?php
    } 
    ?>
    <ul class="danhmucsp_lietke_container" style="width:100%";> 
      <li style="width:100%";>
        <p>Tổng tiền : <?php echo number_format($tongtien,0,',','.').'vnđ' ?></p>
      </li>
    </ul>
</div>