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
        $sql_lietke_danhmucsp = "SELECT * FROM tbl_danhmuc ORDER BY thutu DESC ";
        $query_lietke_danhmucsp = mysqli_query($mysqli,$sql_lietke_danhmucsp);
    ?>
    <div class="danhmucsp_lietke">
        <div class="danhmucsp_lietke_title">
            <h3>Quản lí danh mục sản phẩm</h3>
        </div>
        <div>
            <ul class="danhmucsp_lietke_container row">
                <li>ID</li>
                <li>TÊN DANH MỤC</li>
                <li>CHỨC NĂNG</li>
            </ul>
            <?php
                $i = 0;
                
                while($row = mysqli_fetch_array($query_lietke_danhmucsp)){
                $i++;    
            ?>
            <ul class="danhmucsp_lietke_container row">
                <li><?php echo $i ?> </li>
                <li><?php echo $row['tendanhmuc'] ?></li>
                <li class="danhmucsp_lietke_ql row">
                    <a href="modules/quanlydanhmucsp/xuly.php?id=<?php echo $row['id_danhmuc'] ?>">xóa</a> 
                    <a href="?action=quanlydanhmucsp&query=sua&id=<?php echo $row['id_danhmuc'] ?>">Sửa</a>
                </li>
            </ul>
            <?php
                }
            ?>
        </div>
    </div>
</body>
</html>