 <html>
 <head>
 <title>Form đăng ký thành viên</title>
 </head>
 <body style="height: 100%;background: url('css/image/11.jpg');
			background-size: cover;">

 <?php
include 'connect.php';
 if (isset($_POST["btn_submit"])) {
   //lấy thông tin từ các form bằng phương thức POST
   $username = $_POST["username"];
   $password = $_POST["pass"];
 $name = $_POST["name"];
   $email = $_POST["email"];
   //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
   if ($username == "" || $password == "" || $name == "" || $email == "") {
    echo "bạn vui lòng nhập đầy đủ thông tin";
   }else{
   // Kiểm tra tài khoản đã tồn tại chưa
   $sql="select * from users where username='$username'";
 $kt=mysqli_query($conn, $sql);
 
 if(mysqli_num_rows($kt)  > 0){
 echo "Tài khoản đã tồn tại";
 }else{
 //thực hiện việc lưu trữ dữ liệu vào db
      $sql = "INSERT INTO users( 
     					username,
     					password,
     					name,
                                        email
     					) VALUES (
     					'$username',
     					'$password',
     '$name',
     					'$email'
     					)";
     // thực thi câu $sql với biến conn lấy từ file connection.php
   mysqli_query($conn,$sql);
    header('Location: dangnhap.php');
 }
     
 
   }
 }
 ?>
 <form  method="post">
 <table style="padding-left:  50px;padding-right: 50px;padding-bottom: 20px;border-radius: 20px;
        padding-top: 20px;color: #fff;font-size: 18px;background: rgba(0, 0, 0, 0.4);margin: 250px 500px;; width: 500px;height: 150px;">
 <tr>
     <td colspan="2" style="text-align: center; font-size: 30px;padding: 5px;">Đăng ký</td>
 </tr> 
 <tr>
 <td>Username :</td>
 <td style="padding: 3px;color: #fff;margin-top: 30px;font-size: 18px;"><input size="35"type="text" id="username" name="username"></td>
 </tr>
 <tr>
 <td style="padding: 5px;color: #fff;margin-top: 30px;font-size: 18px;">Password :</td>
 <td><input type="password" id="pass" name="pass"size="35"></td>
 </tr>
 <tr>
 <td style="padding: 5px;color: #fff;margin-top: 30px;font-size: 18px;">Họ Tên :</td>
 <td><input type="text" id="name" name="name"size="35"></td>
 </tr>
 <tr>
 <td style="padding: 5px;color: #fff;margin-top: 30px;font-size: 18px;">Email :</td>
 <td><input type="text" id="email" name="email"size="35"></td>
 </tr>
 <tr>
 <td colspan="2" align="center"><input style="margin-top: 5px;margin-left: 50px;padding: 3px;width: 150px;font-size: 18px;background:#01B0FF;color: white;" type="submit" name="btn_submit" value="Đăng ký"></td>
 </tr>
 
 </table>
 
 </form>
 </body>
 </html>