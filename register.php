<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
// Hàm session_start() được sử dụng để bắt đầu một session.
    session_start();
// includen kết nối tới database
    include("admin/config/conf.php");
// Hàm isset () kiểm tra xem một biến được đặt, điều đó có nghĩa là nó phải được khai báo và không phải là null.
	if(isset($_POST['register'])) {
//Đây là khai báo các paramenter 
		$username = mysqli_real_escape_string($mysqli,$_POST['username']);
		$email = mysqli_real_escape_string($mysqli,$_POST['email']);
		$adress = $_POST['adress'];
		$pass = md5($_POST['pass']);
		$repass = md5($_POST['repass']);
		$phone = $_POST['phone'];
        $role = $_POST['role'];
// Câu lệnh SELECT trong MySQL được sử dụng để lấy dữ liệu từ một bảng cơ sở dữ liệu trả về dữ liệu này dưới dạng một bảng kết quả
		$sql = " SELECT * FROM tbl_users WHERE email = '$email' && pass = '$pass' ";
// khai báo biến result để thực truy vấn đối tượng trong cơ sở dữ liệu
		$result = mysqli_query($mysqli /*kết nối đến db*/, $sql /* thực hiện câu truy vấn*/);

// mysqli_num_rows () là hàm trả về trả về và kiểm tra
//Nếu mà mysqli_num_rows ($result) > 0 thì các khai báo bi
//ở hàng post đã tồn tại thì nó trả về $error
		if(mysqli_num_rows($result) > 0){
			$error[] = 'Tài khoản của bạn đã tồn tại';
		}else{
//ngược lại khi tài khoản đã tồn tại thì nó sẽ kiểm tra pass với repass có giống nhau không
//khi kiểm tra xong và trả về $error[] hoặc  $correct[]
			if($pass != $repass){
				$error[] = 'Mật khẩu của bạn không thành công';
			}else{
//$correct[] thì đăng ký thàng công và lưu tài khoản vào trong tbl của mình
				$correct[] = 'Đăng Ký thành công';
		    	$insert = mysqli_query($mysqli,"INSERT INTO tbl_users(username, email,adress, pass,repass,phone) VALUES('$username','$email','$adress','$pass','$repass','$phone')");
				if($insert){
// Khi mà lưu trữ thành công thì nó sẽ lưu biến vào session
// session có thể hiểu là 1 biến tạm lưu trữ local
					$_SESSION['register'] = $username;
					$_SESSION['id_khachhang'] = mysqli_insert_id($mysqli);
//header(); là link mình đế trang mình muốn sau khi thực hiện tất cả khai báo trên
					header('location:index.php');
				}
			}
		 }
            
	}
?>
    <form action="" method="post">
        <div class="login row">
            <div class="login_banner">
                <img src="img/banner_mauve.png" alt="">
            </div>
            <div class="login_user">
                <h1>Đăng Ký</h1>
                <div class="login_container">
                    <?php
						if(isset($error)){
							foreach($error as $error){
								echo '<span class="error-msg">'.$error.'</span>';
							};
						}elseif(isset($correct)){
							foreach($correct as $correct){
								echo '<span class="error-msg">'.$correct.'</span>';
							};
						}
					?>
                    <p>Họ và tên</p>
                    <input type="text" name="username">
                    <p>Email</p>
                    <input type="email" name="email" require>
                    <p>Địa chỉ</p>
                    <input type="text" name="adress">
                    <p>Điện thoại</p>
                    <input type="text" name="phone" require>
                    <p>Mật khẩu</p>
                    <input type="password" name="pass" require>
                    <p>Nhập lại mật khẩu</p>
                    <input type="password" name="repass">
                    <select name="role" style="width : 100% ; display:none;">
                        <option value="user">user</option>
                        <option value="admin">admin</option>
                    </select>
                    <button type="submit" name="register">Đăng ký</button>
                </div>
                <div class="social_login row">
                    <a href="#"><i class="fa-brands fa-facebook"></i>Google</a>
                    <a href="#"><i class="fa-brands fa-google"></i>Facebook</a>
                </div>
                <a href="login.php">Trang đăng nhập</a>
            </div>
        </div>
    </form>
</body>

</html>