<?php
	$sql_pro = "SELECT * FROM tbl_product WHERE tbl_product.id_danhmuc='$_GET[id]' ORDER BY id_sanpham DESC";
	$query_pro = mysqli_query($mysqli,$sql_pro);
	//get ten danh muc
	$sql_cate = "SELECT * FROM tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
	$query_cate = mysqli_query($mysqli,$sql_cate);
	$row_title = mysqli_fetch_array($query_cate);
?>
 
    <div class="product grip">
        <div class="product_text">
            <h2 class="product_text_all">
                <?php
                    echo $row_title['tendanhmuc'];
                ?>
            </h2>
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