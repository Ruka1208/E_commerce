<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="modules/quanlysp/xuly.php" method="POST" enctype="multipart/form-data">
        <div class="danhmucsp_them">
            <div class="danhmucsp_title">
                <h3>Quản lí sản phẩm</h3>
            </div>
            <div class="danhmucsp_them_content">
                <div class="danhmucsp_them_item row">
                    <span>Tên sản phẩm : </span>
                    <input type="text" name="tensanpham" placeholder="Nhập tên danh mục mà bạn muốn thêm vào">
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Mã sản phẩm :</span>
                    <input type="number" name="masp" placeholder="Nhập thứ tự mà bạn muốn">
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Giá sản phẩm :</span>
                    <input type="text" name="giasp" placeholder="Nhập thứ tự mà bạn muốn">
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Số lượng : </span>
                    <input type="text" name="soluong" placeholder="Nhập thứ tự mà bạn muốn">
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Hình ảnh : </span>
                    <input type="file" name="hinhanh">
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Nội dung : </span>
                    <textarea rows="10"  name="noidung" style="resize: none"></textarea>
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Danh mục sản phẩm </span>
                    <select name="danhmuc">
                    <?php
                        $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                        $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                        while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                    } 
                    ?>
                    </select>
                </div>
                <button name="themsanpham">Thêm danh sản phẩm</button>
            </div>
        </div>
    </form>
</body>
</html>