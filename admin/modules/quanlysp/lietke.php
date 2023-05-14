<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            $sql_lietke_sp = "SELECT * FROM tbl_product,tbl_danhmuc WHERE tbl_product.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY id_sanpham DESC";
            $query_lietke_sp = mysqli_query($mysqli,$sql_lietke_sp);
        ?>
      <div class="danhmucsp_lietke">
        <div class="danhmucsp_lietke_title">
            <h3>Quản lí danh mục sản phẩm</h3>
        </div>
        <div >
          <table style="width:100%">
            <ul class="danhmucsp_lietke_container row">
              <li>Id</li>
              <li>Tên sản phẩm</li>
              <li>Hình ảnh</li>
              <li>Giá sp</li>
              <li>Số lượng</li>
              <li>Danh mục</li>
              <li>Mã sp</li>
              <li>Nội dung</li>
              <li>Quản lý</li>
            
            </ul>
            <?php
              $i = 0;
              while($row = mysqli_fetch_array($query_lietke_sp)){
              $i++;
            ?>
            <ul class="danhmucsp_lietke_container row">
              <li><?php echo $i ?></li>
              <li><?php echo $row['tensanpham'] ?></li>
              <li><img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="100px"></li>
              <li><?php echo $row['giasp'] ?></li>
              <li><?php echo $row['soluong'] ?></li>
              <li><?php echo $row['tendanhmuc'] ?></li>
              <li><?php echo $row['masp'] ?></li>
              <li><?php echo $row['noidung'] ?></li>
              <li>
                <a href="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>">Xoá</a>
                <a href="?action=quanlysp&query=sua&idsanpham=<?php echo $row['id_sanpham'] ?>">Sửa</a> 
              </li>
            
            </ul>
            <?php
            } 
            ?>  
          </table>
        </div>
     </div>
 

</body>
</html>