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
        
    </head>
    <body>
        <div><?php include 'header.php'; ?></div>
        <div class="sp_dichvu">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <h1>Thông tin chi tiết dich vụ </h1>
                <?php
               
            include 'connect.php';
            	$MA_KM=$_GET['MA_KM'];
            $sql="SELECT MA_KM,HINH_ANH,TEN_KM,NOI_DUNG ,NGAY_BAT_DAU,NGAY_KET_THUC from khuyenmai where MA_KM='$MA_KM'";
            
            $result = mysqli_query($conn, $sql);
            $row= mysqli_fetch_array($result);
          
           echo "<div class=''>";
           echo "<img class='img'width='100%' height='450px'src='css/image/$row[HINH_ANH]'>";
           
               echo" <h1>$row[TEN_KM]</h1>";
             echo"<P style='color:red'>Ngày bắt đầu :$row[NGAY_BAT_DAU]</p>";
                 echo"<P style='color:red'>Ngày kết thúc :$row[NGAY_KET_THUC]</p>";
               echo" <p>$row[NOI_DUNG]</p>";
             
           echo" </div>";
       
                    ?>
                </div>
                <div class="col-md-2"></div>
                </div>
        </div>
       
          <div><?php include 'footer.php'; ?></div>
    </body>
</html>
