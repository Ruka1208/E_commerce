<?php 
include('../../config/conf.php');  
$tenloaisp = $_POST['tendanhmuc'];
$thutu = $_POST['thutu'];
    if(isset($_POST['themdanhmuc'])){
        $sql_them = "INSERT INTO tbl_danhmuc(tendanhmuc,thutu) VALUE('".$tenloaisp."','".$thutu."')";
        mysqli_query($mysqli,$sql_them);
        header('location:../../indexAdmin.php?action=quanlydanhmucsp&query=them');
    }elseif(isset($_POST['suadanhmuc'])){
        $sql_update = "UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."',thutu='".$thutu."' WHERE id_danhmuc='$_GET[id]'";
        mysqli_query($mysqli,$sql_update);
        header('Location:../../indexAdmin.php?action=quanlydanhmucsp&query=them');
    }else{
        $id = $_GET['id'];
        $sql_xoa = "DELETE FROM tbl_danhmuc WHERE id_danhmuc='".$id."'";
        mysqli_query($mysqli,$sql_xoa);
        header('location:../../indexAdmin.php?action=quanlydanhmucsp&query=them');
    }
?>