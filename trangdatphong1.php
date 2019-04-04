<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
       <head>
        <title>Khách sạn VOLA HOTEL spa</title>
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
    
      <div class="info_ho">
          <div class="row">
       <div class="col-md-3" ><span class="time">1</span>&nbsp;Thời Gian Đặt Phòng</div>
       <div class="col-md-3"><span class="chonphong ">2</span>&nbsp;Chọn Phòng</div>
       <div class="col-md-3"><span class="inf_rom">3</span>&nbsp;Thông Tin Cá Nhân </div>
       <div class="col-md-3" ><span class="money">4</span>&nbsp; Thông Tin Đặt Phòng  </div>
            </div>
      </div>
     
      
  <?php   
            include 'connect.php';
            


	//$MA_KH2=$_GET['MA_KH2'];
	//	$sql = "select * from khachhang where MA_KH2='$MA_KH2'";
          //      $result= mysqli_query($conn, $sql);
	//	$rs= mysqli_fetch_array($result);
                //print_r($rs)
		

            if (isset($_POST['submit'])){
                    
                        $NGAY_DEN = $_POST ['NGAY_DEN'];
                        $NGAY_DI = $_POST ['NGAY_DI'];
                      $hieu_so = abs(strtotime($NGAY_DI) - strtotime($NGAY_DEN)); 
                      $nam = floor($hieu_so / (365*60*60*24));  
		$thang = floor(($hieu_so - $nam * 365*60*60*24) / (30*60*60*24));  
		$ngay = floor(($hieu_so - $nam * 365*60*60*24 - $thang*30*60*60*24)/ (60*60*24));  
		  printf(" %d ngày", $ngay);
                $sql = "insert into phieudatphong(NGAY_DEN,NGAY_DI)values('".$_POST['NGAY_DEN']."','".$_POST['NGAY_DI']."')";
		if(mysqli_query($conn,$sql)){
			header('Location:updatetrangdatphong4.php');
		}else{
			echo"Error".mysqli_error($conn);
	 	 }
    }
            
            
  ?> 
              
      <form name="" action="" method="post">
      <h2 style="text-align:center;margin-top: 30px;">Chọn Ngày </label></h2>
      <label>Ngày đến</label></br>
      <input class="thoigian" type="date" value="" name="NGAY_DEN"><br><br>
      <label>Ngày đi</label></br>
      <input class="thoigian" type="date" value="" name="NGAY_DI"><br><br>
      
      <input name="submit" class="tieptheo1" type="submit" value="Đặt phòng" /> 
     
           </form>
      </div>
  </div>
    <div id="footer"><?php include 'footer.php';?></div>
        </div>
    </body>
</html>
