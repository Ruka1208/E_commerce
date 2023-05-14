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
        $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc='$_GET[id]' LIMIT 1";
        $query_sua_danhmucsp = mysqli_query($mysqli,$sql_sua_danhmucsp);
    ?>
    <form method="POST" action="modules/quanlydanhmucsp/xuly.php?id=<?php echo $_GET['id'] ?>">
        <div class="danhmucsp_them">
            <?php
                while($dong = mysqli_fetch_array($query_sua_danhmucsp)) {
            ?>
            <div class="danhmucsp_title">
                <h3>Sửa danh mục sản phẩm</h3>
            </div>
            <div class="danhmucsp_them_content">
                <div class="danhmucsp_them_item row">
                    <span>Tên danh mục : </span>
                    <input type="text" value="<?php echo $dong['tendanhmuc'] ?>" name="tendanhmuc" placeholder="Nhập tên danh mục mà bạn muốn thêm vào">
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Thứ tự của danh mục :</span>
                    <input type="number" value="<?php echo $dong['thutu'] ?>" name="thutu" placeholder="Nhập thứ tự mà bạn muốn">
                </div>
                <button name="suadanhmuc">Sửa danh mục sản phẩm</button>
            </div>
        </div>
        <?php
            } 
        ?>
    </form>
</body>
</html>