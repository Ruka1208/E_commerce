<div class="product grip">
	<div class="product_text ">
		<h2>Chi tiết sản phẩm</h2>  
	</div>
</div>
<?php
	$sql_chitiet = "SELECT * FROM tbl_product,tbl_danhmuc WHERE tbl_product.id_danhmuc=tbl_danhmuc.id_danhmuc AND tbl_product.id_sanpham='$_GET[id]' LIMIT 1";
	$query_chitiet = mysqli_query($mysqli,$sql_chitiet);
	while($row_chitiet = mysqli_fetch_array($query_chitiet)){
?>
<div class="product row">
	<div class="pic_product">
		<img width="100%" src="admin/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>">
	</div>
	<form method="POST" action="pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
		<div class="product_details grip">
			<h1 >Tên sản phẩm : <?php echo $row_chitiet['tensanpham'] ?></h1>
			<p>Mã sp: <?php echo $row_chitiet['masp'] ?></p>
			<p>Giá sp: <?php echo number_format($row_chitiet['giasp'],0,',','.').'VNĐ' ?></p>
			<p >Số lượng sp: <?php echo $row_chitiet['soluong'] ?></p>
			<p >Danh mục sp: <?php echo $row_chitiet['tendanhmuc'] ?></p>
			<div class="text_text"  id="tab2" class="tab-content">
				
				<p>Nội dung sản phẩm : <?php echo $row_chitiet['noidung'] ?></p>
			</div>
			<p class="btn"><input class="btn_product_details" name="themgiohang" type="submit" value="Thêm giỏ hàng"></p>
		</div>
	</form>
</div>

<?php
} 
?>

