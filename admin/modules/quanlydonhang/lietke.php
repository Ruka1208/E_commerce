<div class="danhmucsp_lietke">
        <div class="danhmucsp_lietke_title">
            <h3>Liệt kê sản phẩm</h3>
        </div>
    <?php
    //Lấy dữ liệu ở bản tbl_cart và tbl_users và cho tbl_cart.id_khachhang = tbl_users.id
      $sql_lietke_dh = "SELECT * FROM tbl_cart,tbl_users WHERE tbl_cart.id_khachhang = tbl_users.id ORDER BY tbl_cart.id_cart DESC";
    //khai bao bien bất kì và cho nó bằng mysqli_query(kết nối database , và câu lên sql)
      $query_lietke_dh = mysqli_query($mysqli,$sql_lietke_dh);
    ?>
    <table style="width:100%" border="1" style="border-collapse: collapse;">
      <ul class="danhmucsp_lietke_container row">
        <li>Id</li>
        <li>Mã đơn hàng</li>
        <li>Tên khách hàng</li>
        <li>Địa chỉ</li>
        <li>Email</li>
        <li>Số điện thoại</li>
        <li>Tình trạng</li>
 
      </ul>
      <?php
        $i = 0;
        while($row = mysqli_fetch_array($query_lietke_dh)){
        $i++;
      ?>
      <ul class="danhmucsp_lietke_container row">
        <li><?php echo $i ?></li>
        <li><?php echo $row['code_cart'] ?></li>
        <li><?php echo $row['username'] ?></li>
        <li><?php echo $row['adress'] ?></li>
        <li><?php echo $row['email'] ?></li>
        <li><?php echo $row['phone'] ?></li>
        <li>
          <a href="indexAdmin.php?action=donhang&query=xemdonhang&code=<?php echo $row['code_cart'] ?>">Xem đơn hàng</a> 
        </li>
      
      </ul>
      <?php
      } 
      ?>
 
    </table>
</div>