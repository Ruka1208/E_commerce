<?php
    if(isset($_GET['quanly'])){
        $tam = $_GET['quanly'];
    }else{
        $tam = '';
    }
?>

<?php
    if($tam=='danhmuc'){
        include("main/danhmuc.php");
    }elseif($tam=='sanpham'){
        include("main/sanpham.php");
    }elseif($tam=='giohang'){
        include("main/giohang.php");
    }elseif($tam=='register'){
        include("main/register.php");
    }elseif($tam=='login'){
        include("main/login.php");
    }elseif($tam=='thanhtoan'){
        include("main/thanhtoan.php");
    }elseif($tam=='timkiem'){
        include("main/timkiem.php");
    }elseif($tam=='camon'){
        include("main/camon.php");
    }else{
        include("main/index.php");
    }
?>