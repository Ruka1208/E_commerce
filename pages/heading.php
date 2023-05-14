<?php
	$sql_danhmuc = "SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
    $query_danhmuc = mysqli_query($mysqli,$sql_danhmuc);
        
?>

                <div class="main">
                    <div class="title_main">
                        <span class="title_main_chill">Cảm ơn bạn đã ghé thăm Lobeo Art. Chúc bạn mua sắm vui vẻ</span>
                    </div>
                    <div class="size_main">
                        <div class="main_header row">
                            <div class="logo_main">
                                <img src="./img/Lobeo.png" style="width: 150px;">
                            </div>
                            <form action="index.php?quanly=timkiem" method="POST">
                                <div class="search_main row">
                                    <div class="search_item">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                        <input type="search" class="header__search-input" placeholder="Tìm kiếm sản phẩm" name="tukhoa">
                                    </div>
                                    <div class="search_button">
                                        <button name="timkiem">Tìm kiếm</button>
                                    </div>
                                </div>
                            </form>         
                            <div class="service">
                                <ul class="service_item row">
                                    <li>
                                        <a href="index.php?quanly=giohang" style="color: black;"><i class="fas fa-shopping-cart"></i>Giỏ hàng</a>
                                    </li>
                                    <li>
                                        <?php
                                            if(isset($_SESSION['user_name'])){ 
                                        ?>
                                            <span class="header_mid_login_item"><a href="logout.php">Đăng Xuất</a></span>
                                            <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1> 
                                        <?php
                                            }else{ 
                                        ?>
                                        <span class="header_mid_login_item"><a href="login.php">Đăng nhập</a></span>  
                                        <span>|</span>      
                                        <span class="header_mid_login_item"><a href="register.php">Đăng Ký</a></span>
                                                    
                                        <?php
                                            } 
                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>


    