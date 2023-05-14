<div class="menu_main">
    <div class="menu_container">
        <div class="size_main">
            <ul class="menu_box drop row">
                <li class="menu_item"><a href="index.php">TRANG CHỦ</a></li>
                <li class="menu_item">COMBO SẢN PHẢM</li>
                <li class="menu_item">KHUYỂN MÃI HOT</li>
                <li class="menu_item">DANH MỤC SẢN PHẨM
                    <ul class="drop_item">
                        <?php 
                            while($row_danhmuc = mysqli_fetch_array($query_danhmuc)){
                        ?>
                        <li><a href="index.php?quanly=danhmuc&id=<?php echo $row_danhmuc['id_danhmuc'] ?> "
                                class="menu_item"><?php echo $row_danhmuc['tendanhmuc'] ?></a></li>
                        <?php
                            }
                        ?>
                    </ul>
                </li>
                <li class="menu_item">THỂ LOẠI</li>
                <li class="menu_item">REVIEW HỌA CỤ</li>
                <li class="menu_item">HƯỠNG DẪN MUA HÀNG</li>
                <li class="menu_item">BLOG TIN TƯC</li>
            </ul>
        </div>
    </div>
</div>