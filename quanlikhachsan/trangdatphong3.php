<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
       <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <link href="css/bootstrap-4.0.0-dist (1)/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
          
        <script src="css/bootstrap-4.0.0-dist (1)/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="css/jquery/jquery-3.3.1.min.js.js" type="text/javascript"></script>
        <link href="css/fontawesome-free-5.5.0-web/fontawesome-free-5.5.0-web/css/all.css" rel="stylesheet" type="text/css"/>
        <link href="css/header.css" rel="stylesheet" type="text/css"/>
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>
        <link href="css/trangdatphong3.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
  <div id="header"> <?php include 'header.php';?></div>
  <div id="content">
      <div class="content_center">
      <img class="sao" src="css/image/340055f001b326f15836d5d90e39a4d61.gif" alt=""/>

      <p style="text-align: center;font-size: 40px;">LOVA<spam style="font-size: 25px;">HOTEL</spam><span style="font-size: 16px;">SPA</span></p>
      <div class="info_ho">
          <div class="row">
       <div class="col-md-3" ><span class="time">1</span>&nbsp;Thời Gian Đặt Phòng</div>
       <div class="col-md-3"><span class="chonphong ">2</span>&nbsp;Chọn Phòng</div>
       <div class="col-md-3"><span class="inf_rom">3</span>&nbsp;Thông Tin Cá Nhân </div>
       <div class="col-md-3" ><span class="money">4</span>&nbsp; Thông Tin Đặt Phòng  </div>
            </div>
      </div>
      <div class="soluong">
          <h2 style="margin-left: 200px;padding-top: 20px; ">Thông tin của bạn </h2>
                    <form name="" action="" method="post">
                <div>
     
        <input name="MA_KH2" id="tensv" type="hidden" placeholder="" /> <br><br>
        <label align="center" style="font-weight: bold;"> Họ Tên :  </label>
        <input name="HOTEN_KH" id="tens" type="text" placeholder="" /> <br><br>
        <label align="center" id="tensv1" style="font-weight: bold;">Giới tính :</label>
                <select name="GIOI_TINH">
                    <option> Chọn </option>
                    <option value="1">Nam</option>
                    <option value="0">Nữ</option>
                </select><br><br>
       <label align="center" style="font-weight: bold;">Ngày sinh : </label>
       <input name="NGAY_SINH" id="ten" type="date" placeholder="" /> <br><br>
        <label align="center" style="font-weight: bold;">Địa chỉ :</label>
        <input name="DIA_CHI" id="te" type="text" placeholder="" /> <br><br>
         <label align="center" style="font-weight: bold;">Số điện thoại :</label>
        <input name="SO_DT" id="t" type="text" placeholder="" /> <br><br>
        <input class="tieptheo1" name="submit" type="submit" value="Đặt phòng " /> 
      
    </div>
             
</form>
               <?php
            include 'taocosodulieu/connect.php';
            if (isset($_POST['submit'])){
                        $MA_NV2 = $_POST['MA_KH2'] ;
                        $HOTEN_KH = $_POST ['HOTEN_KH'] ;
                        $GIOI_TINH = $_POST ['GIOI_TINH'];
                        $NGAY_SINH = $_POST ['NGAY_SINH'];
                        $DIA_CHI = $_POST['DIA_CHI'];
                        $SO_DT = $_POST['SO_DT'];
                $sql = "insert into khachhang(MA_KH2 , HOTEN_KH ,GIOI_TINH , NGAY_SINH, DIA_CHI , SO_DT)values('".$_POST['MA_KH2']."','".$_POST['HOTEN_KH']."','".$_POST['GIOI_TINH']."','".$_POST['NGAY_SINH']."','".$_POST['DIA_CHI']."','".$_POST['SO_DT']."')";
		if(mysqli_query($conn,$sql)){
			header('Location:trangdatphong4.php');
		}else{
			echo"Error".mysqli_error($conn);
	 	 }
    }
            
            ?>
      </div>
     
      
      </div>
  </div>
    <div id="footer"><?php include 'footer.php';?></div>
        </div>
    </body>
</html>

