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
        <link href="css/tintuc.css" rel="stylesheet" type="text/css"/>
       </head>
       <body>
           <div><?php include 'header.php'; ?></div>
           <div class="">
               <video width="100%" height="100%px;" controls controls autoplay muted>
                         <source src="css/image/Giới thiệu Khách Sạn 5 Sao LADALAT - Video 4K.mp4" type="video/mp4"></video>
               <div class="tintuc1">
                    <h2 style="color:#000;text-align: center; ">Tin tức , sự kiện<br><span class=""style="font-size: 20px;">Cập nhập tin tức mới nhất về những khuyến mãi, tin du lịch, tin giải trí</span></h2>
                    <div class="row" style="margin-left: 15px;margin-right: 15px;">
                        <?php
                             include 'connect.php';
               $sql= "SELECT MA_KM,HINH_ANH,TEN_KM,NOI_DUNG,NGAY_BAT_DAU,NGAY_KET_THUC FROM khuyenmai LIMIT 4 ";
               $result= mysqli_query($conn, $sql);
               
                 while ($row= mysqli_fetch_array($result)){
            
                    ?>
                                <div class=" col-lg-6 col-md-6 ">
                                  <?php echo"  <div class=''>";
                                  ?>
                              <?php 
                             
                              echo "<a href='chitiet_km.php?MA_KM=".$row['MA_KM']."'>";
                          // echo"<a href='chitietphong_sp.php?MA_PHONG2=$row[MA_PHONG2]'>"; 
                             echo "<img width='100%'height='350px;'src='css/image/$row[HINH_ANH]'>";
                              echo "</a>";?>
                              
                               
                                    
                            <h2 class=''><?php echo"$row[TEN_KM]"?></h2><p class=''><?php echo"$row[NGAY_BAT_DAU]"?></p><p class=''><?php echo"$row[NGAY_KET_THUC]"?></p>
                        
                           <p class=''><?php echo"$row[NOI_DUNG]"?></p>
            
                          </div>
                       <?php echo"</div>"?>
                        <?php
                 
                 }
                 ?>
                            

                            </div>
                    </div>
                  
                       
                    </div>
                        <div><?php include 'footer.php'; ?></div>
       </body>
</html>