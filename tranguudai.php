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
        <link href="css/uudai.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div><?php include 'header.php';?></div>
        
        <div id="dichvu">
          
                  
                      <video width="100%" height="100%px;" controls controls autoplay muted>
                         <source src="css/image/Giới thiệu Khách Sạn 5 Sao LADALAT - Video 4K.mp4" type="video/mp4"></video>
              <h2 class="info">Dịch vụ của chúng tôi</h2>
                    <p class="info1">Sự đầu tư tỉ mỉ cùng thiết kế sang trọng, trang thiết bị hiện đại và đội ngũ nhân viên chuyên nghiệp chúng tôi sẵn sàng giúp đỡ, đáp ứng nguyện vọng của mọi khách hàng.</p>
                   <div class="row" style="margin-left: 15px;margin-right: 15px;">
                           <?php
               include 'connect.php';
               $sql= "SELECT MA_DV,HINH_ANH,TEN_DV,NOI_DUNG,DON_GIA,DON_VI_TINH FROM dich_vu ";
               $result= mysqli_query($conn, $sql);
               
                 while ($row= mysqli_fetch_array($result)){
            
                    ?>
                                <div class=" col-lg-6 col-md-6 ">
                                  <?php echo"  <div class='trang_dv'>";
                                  ?>
                              <?php 
                             
                              echo "<a href='chitiet_dv.php?MA_DV=".$row['MA_DV']."'>";
                          // echo"<a href='chitietphong_sp.php?MA_PHONG2=$row[MA_PHONG2]'>"; 
                             echo "<img width='100%'height='350px;'src='css/image/$row[HINH_ANH]'>";
                              echo "</a>";?>
                              
                               
                           
            
                          </div>
                       <?php echo"</div>"?>
                        <?php
                 }
                 ?>
        </div>
        </div>
        <div> <?php include 'footer.php'; ?></div>
    </body>
</html>