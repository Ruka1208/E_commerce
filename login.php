<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    include("admin/config/conf.php");
	if(isset($_POST['login'])) {
		$email = mysqli_real_escape_string($mysqli,$_POST['email']);
		$pass = md5($_POST['pass']);
        $role = $_POST['role'];
		$sql = " SELECT * FROM tbl_users WHERE email = '$email' && pass = '$pass' ";
		$result = mysqli_query($mysqli, $sql);
		if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            if($row['role'] == 'admin'){
                $_SESSION['admin_name'] = $row['username'];
                header('location:admin/indexAdmin.php');
            }elseif($row['role'] == 'user'){
                $_SESSION['id_khachhang'] = $row['id'];
                $_SESSION['user_name'] = $row['username'];
                header('location:index.php');
            };
		}else{
            $error[] = 'incorrect email or password!';
        };    
	};
?>
<form action="" autocomplete="off" method="POST">
        <div class="login row">
            <div class="login_banner">
                <img src="img/banner_mauve.png" alt="">
            </div>
            <div class="login_user">
                <?php
                    if(isset($error)){
                        foreach($error as $error){
                            echo '<span class="error-msg">'.$error.'</span>';
                        };
                    };
                ?>
				<h3>Đăng nhập khách hàng</h3>
				<p>Tài khoản</p>
				<input type="text" name="email" placeholder="Email...">
				<p>Mật khẩu</p>
				<input type="password" name="pass" placeholder="Mật khẩu...">
				<button type="submit" name="login"><a href="">Đăng nhập</a></button>
                <div class="social_login row">
                    <a href="#"><i class="fa-brands fa-facebook"></i>Google</a>
                    <a href="#"><i class="fa-brands fa-google"></i>Facebook</a>
                    
                </div>
                <a href="register.php">Trang đăng kí</a>
            </div>
        </div>
    </form>
</body>
</html>