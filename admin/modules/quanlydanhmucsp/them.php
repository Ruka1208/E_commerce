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
        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            if(empty($_POST['tendanhmuc']) == false) {
                $tenloaisp = $_POST['tendanhmuc'];
            } else {
            $errHoten = "không được rỗng";
            }
        }else{
            if(empty($_POST['thutu']) == false) {
                $thutu = $_POST['thutu'];
            } else {
            $errHoten = "Họ tên không được rỗng";
            }
        
    ?>
    <form action="modules/quanlydanhmucsp/xuly.php" method="POST">
        <div class="danhmucsp_them">
            <div class="danhmucsp_title">
                <h3>Danh mục sản phẩm</h3>
            </div>
            <div class="danhmucsp_them_content">
                <div class="danhmucsp_them_item row">
                    <span>Tên danh mục : </span>
                    <input type="text" name="tendanhmuc" placeholder="Nhập tên danh mục mà bạn muốn thêm vào">
                </div>
                <div class="danhmucsp_them_item row">
                    <span>Thứ tự của danh mục :</span>
                    <input type="number" name="thutu" placeholder="Nhập thứ tự mà bạn muốn">
                </div>
                <button name="themdanhmuc">Thêm danh mục sản phẩm</button>
            </div>
        </div>
    </form>
    <?php 
        }
    ?>
</body>
</html>