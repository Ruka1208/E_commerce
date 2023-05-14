<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
        if(isset($_POST['tukhoa']) == NULL){
            echo "Sản phẩm đó không tồn tại";
        }
	}
	$sql_pro = "SELECT * FROM tbl_product,tbl_danhmuc WHERE tbl_product.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_product.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./././css/base.css">
    <title>Document</title>
</head>
    <body>
        <div class ="product">
            <div class ="product">
                <div class ="product_container">
                    <div class = "product_title" >
                        <h2>Từ khóa bạn đã chọn : <?php echo $_POST['tukhoa'] ?></h2>
                        <p class="line_product_text"></p>
                        
                        <div class="product_navbar"> 
                        <?php 
                            while($row_pro = mysqli_fetch_array($query_pro)){
                        ?>
                            <div class="product_navbar_container">
                                <div class="product_navbar_item">
                                    <div class="item">
                                        <a href="index.php?quanly=sanpham&id=<?php echo $row_pro['id_sanpham'] ?>">
                                            <div class="product_img">
                                                <img src="admin/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" alt="">
                                            </div>
                                            <div class="product_info">
                                                <p><?php echo $row_pro['tensanpham'] ?></p>
                                            <div class="product_price">
                                                <p><?php  echo number_format( $row_pro['giasp'],0,',','.').'VNĐ' ?> </p>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>  
                       
                        </div>           
                         <?php
                            }
                        ?>  
                        </div>
                    </div>
                </div>    
            </div> 
        </div>

    </body>
</html>

