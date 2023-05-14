<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/adminPages.css">
    <title>Document</title>
</head>
<body>
<?php
	session_start();

    if(!isset($_SESSION['admin_name'])){
       header('location:login.php');
    }
?>  
    <div class="header_admin">
        <div class="header_admin_top">
            <div class="header_admin_top_size row">
                <h1>LOBEO ART</h1>
                <div class="user_admin row">
                    <div class="office_user_admin">
                        <p>Tên :<span><?php echo $_SESSION['admin_name'] ?></span></p>
                    </div>
                    <div class="logo_user_admin">
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_admin_size">
            <div class="header_admin_menu">
                <div class="header_admin_menu_container">
                    <div class="header_admin_menu_content row">
                        <div class="header_admin_menu_item">
                            <ul class="header_admin_menu_list">
                                <h2>Trang chủ</h2>
                                <a href="indexAdmin.php?action=quanlydanhmucsp&query=them"><li> Quản lí danh mục</li></a>
                                <li><a href="indexAdmin.php?action=quanlysp&query=them"> Quản lí sản phẩm</a></li>
                                <li><a href="indexAdmin.php?action=quanlydonhang&query=lietke">Quản lí đơn hàng</a></li>     
                                <li><a href="#">Quản lí tài khoản</a></li>
                                <li><a href="../../HoaCuaPHP/index.php">Trang chủ</a></li>
                                <li><a href="../login.php">Đăng xuất</a></li>
                            </ul>
                        </div>
                        <div>
                            <?php 
                                include("navAdmin.php");
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>