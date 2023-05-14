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
	$sql_sua_sp = "SELECT * FROM tbl_product WHERE id_sanpham='$_GET[idsanpham]' LIMIT 1";
	$query_sua_sp = mysqli_query($mysqli,$sql_sua_sp);
?>
<?php
while($row = mysqli_fetch_array($query_sua_sp)) {
?>
     <form method="POST" action="modules/quanlysp/xuly.php?idsanpham=<?php echo $row['id_sanpham'] ?>" enctype="multipart/form-data">
        <div class="danhmucsp_them">
            <div class="danhmucsp_title">
                <h3>Quản lí sản phẩm</h3>
            </div>
            <div class="danhmucsp_them_content">
                <div class="danhmucsp_them_item row">
                    <span>Tên sản phẩm : </span>
                    <input type="text" value="<?php echo $row['tensanpham'] ?>" name="tensanpham">
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Mã sản phẩm :</span>
                    <input type="text" value="<?php echo $row['masp'] ?>" name="masp">
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Giá sản phẩm :</span>
                    <input type="text" value="<?php echo $row['giasp'] ?>" name="giasp">
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Số lượng : </span>
                    <input type="text" value="<?php echo $row['soluong'] ?>" name="soluong">
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Hình ảnh : </span>
                    <input type="file" name="hinhanh">
                    <img src="modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" width="150px">
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Nội dung : </span>
                    <textarea rows="10"  name="noidung" style="resize: none"><?php echo  $row['noidung'] ?></textarea>
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Danh mục sản phẩm </span>
                    <select name="danhmuc">
                    <?php
                    $sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
                    while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                        if($row_danhmuc['id_danhmuc']==$row['id_danhmuc']){
                    ?>
                    <option selected value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                        }else{
                    ?>
                    <option value="<?php echo $row_danhmuc['id_danhmuc'] ?>"><?php echo $row_danhmuc['tendanhmuc'] ?></option>
                    <?php
                        }
                    } 
                    ?>
                    </select>
                </div>
                <button name="suasanpham">Sửa sản phẩm</button>
            </div>
        </div>
    </form>
<?php
     } 
?>
</body>
</html>