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
	$sql_pro = "SELECT * FROM tbl_product,tbl_danhmuc WHERE tbl_product.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_product.id_sanpham DESC";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	//get ten danh muc
	
?>

<?php
	if(isset($_GET['trang'])){
		$page = $_GET['trang'];
	}else{
		$page = 1;
	}
	if($page == '' || $page == 1){
		$begin = 0;
	}else{
		$begin = ($page*10-10);
	}
	$sql_pro = "SELECT * FROM tbl_product,tbl_danhmuc WHERE tbl_product.id_danhmuc=tbl_danhmuc.id_danhmuc ORDER BY tbl_product.id_sanpham DESC LIMIT $begin,10";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	
?>
    <div class="background_product">
        <div class ="product">
            <div class ="product_container">
                <div class = "product_title" >
                    <h2>SẢN PHẨM HIỆN CÓ Ở LOBEO ART</h2>
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
                </div>
                    </div>   
                        </div>
                    </div>   
                </div>
            </div>   
        </div>
    <div style="clear:both;"></div>
				<style type="text/css">
					ul.list_trang {
					    
					    list-style: none;
					}
					ul.list_trang li {
					    
					    padding: 5px 13px;
					    margin: 5px;
				
					    display: block;
					}
					ul.list_trang li a {
					    color: #000;
					    text-align: center;
					    text-decoration: none;
					 
					}
                    .list_trang{
                        padding-bottom:50px;
                    }
                    .row_6{
                        display: flex ;
                        justify-content: center;
                    }

                    .list_trang_box p{
                        max-width: 1200px;
                        margin: auto;
                    }
				</style>
				<?php
				$sql_trang = mysqli_query($mysqli,"SELECT * FROM tbl_product");
				$row_count = mysqli_num_rows($sql_trang);  
				$trang = ceil($row_count/10);
				?>
				
				<div class="list_trang_box grip">
                    <p>Trang hiện tại : <?php echo $page ?>/<?php echo $trang ?> </p>
                    <ul class="list_trang grip row_6">

                        <?php
                        
                        for($i=1;$i<=$trang;$i++){ 
                        ?>
                            <li <?php if($i==$page){echo ' border-radius:5px; color:white;"';}else{ echo ''; }  ?>><a href="index.php?trang=<?php echo $i ?>"><?php echo $i  ?></a></li>
                        <?php
                        } 
                        ?>
                        
                    </ul>
                </div>
</body>
</html>