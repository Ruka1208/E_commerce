<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<div class="grip">
    <?php
        if(isset($_GET['action']) && $_GET['query']){
            $tam = $_GET['action'];
            $query = $_GET['query'];
        }else{
            $tam = '';
        }
        if($tam=='quanlydanhmucsp' && $query=='them'){
            include("modules/quanlydanhmucsp/them.php");
            include("modules/quanlydanhmucsp/lietke.php");
        }elseif($tam=='quanlydanhmucsp' && $query=='sua'){
            include("modules/quanlydanhmucsp/sua.php");
        }
        
         
        elseif($tam=='quanlysp' && $query=='them'){
            include("modules/quanlysp/them.php");
            include("modules/quanlysp/lietke.php");
        }elseif($tam=='quanlysp' && $query=='sua'){
            include("modules/quanlysp/sua.php");
        }
        
        elseif($tam=='quanlydonhang' && $query=='lietke'){
            include("modules/quanlydonhang/lietke.php");

        }elseif($tam=='donhang' && $query=='xemdonhang'){
            include("modules/quanlydonhang/xemdonhang.php");
        }
        ?>
</div>
</body>
</html>