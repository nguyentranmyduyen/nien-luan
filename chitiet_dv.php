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
        <link href="css/chitiet_dv.css" rel="stylesheet" type="text/css"/>
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
            	$MA_DV=$_GET['MA_DV'];
            $sql="SELECT MA_DV,HINH_ANH,TEN_DV,NOI_DUNG,DON_GIA,DON_VI_TINH from dich_vu where MA_DV='$MA_DV'";
            
            $result = mysqli_query($conn, $sql);
            $row= mysqli_fetch_array($result);
          
           echo "<div class='ifo_chitiet'>";
           echo "<img class='img'width='100%' height='450px'src='css/image/$row[HINH_ANH]'>";
               echo" <h1>$row[TEN_DV]</h1>";
               echo number_format("$row[DON_GIA]" ),0,"$row[DON_VI_TINH]";
               echo" <p>$row[NOI_DUNG]</p>";
             echo" <a href='trangdatphong2.php?MA_DV=".$row['MA_DV']."'>Đặt dịch vụ </a></td>";
           echo" </div>";
       
                    ?>
                </div>
                <div class="col-md-2"></div>
                </div>
        </div>
       
          <div><?php include 'footer.php'; ?></div>
    </body>
</html>
