     <?php
$server_username = "root";
$server_password = "";
$server_host = "localhost";
$database = 'quanlikhachsan';
 
$conn = mysqli_connect($server_host,$server_username,$server_password,$database) or die("không thể kết nối tới database");
mysqli_query($conn,"SET NAMES 'UTF8'");
?>
 
<?php
session_start();
?>
<html>
<head>
 <title>Trang đăng nhập</title>
 <meta charset="utf-8">
</head>
<body  style="height: 100%;background: url('css/image/11.jpg');
			background-size: cover;">
<?php
 //Gọi file connection.php ở bài trước

 // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
 if (isset($_POST["btn_submit"])) {
 // lấy thông tin người dùng
 $username = $_POST["username"];
 $password = $_POST["password"];
 //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
 //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
 $username = strip_tags($username);
 $username = addslashes($username);
 $password = strip_tags($password);
 $password = addslashes($password);
 if ($username == "" || $password =="") {
 echo "username hoặc password bạn không được để trống!";
 }else{
 $sql = "select * from users where username = '$username' and password = '$password' ";
 $query = mysqli_query($conn,$sql);
 $num_rows = mysqli_num_rows($query);
 if ($num_rows==0) {
 echo "tên đăng nhập hoặc mật khẩu không đúng !";
 }else{
 //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
 $_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.php');
 }
 }
 }
?>
    <form method="POST" >
     <div style="color: #fff;font-size: 18px;background: rgba(0, 0, 0, 0.4);margin: 250px 500px;; width: 350px;height: 200px;padding: 30px;border-radius: 20px;">
         <label style="width: 150px;font-size: 30px;padding-left: 100px; ">Đăng nhập</label>
     <table style="padding-top: 20px;">
      <tr>
          <td style="color: #fff;font-size: 18px;padding: 5px;">Username:</td>
          <td><input type="text" name="username" size="35"</td>
      </tr>
      <tr>
      <td style="color: #fff;margin-top: 30px;font-size: 18px;padding: 5px;">Password:</td>
      <td><input style="margin-top: 10px;"type="password" name="password" size="35"></td>
      </tr>
      <tr>
          <td><a style="padding-left: 20px;font-size: 18px;color: blue;" href="dangkis.php">Đăng kí</td>
          <td colspan="2" align="center"> <input style="margin-top: 5px;margin-left: 50px;padding: 3px;width: 150px;font-size: 18px;background:#01B0FF;color: white;" name="btn_submit" type="submit" value="Đăng nhập"></td>
         
      </tr>
      </table>
     </div>>
  </form>
</body>
</html>