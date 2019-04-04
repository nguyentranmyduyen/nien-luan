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
        <link href="css/footer.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<div id="footer">
            <div class="row">
                <div class="col-md-3"> <img  style="margin-left: 30px;margin-top: 50px;" width="300px" height="100px"src="css/image/lova-hotel-logo-tasarimi.png" alt=""/></div>
                <div class="col-md-3">
                    <div class="info_hotel">
                        <h5 style="#000">LOVA HOTEL SPA</h5>
                        <p style="#0066ff"> <span style="text-decoration: underline">Địa chỉ: </span>179b, Đường 3/2, Phường Xân Khánh, Quận Ninh Kiều, TP.Cần Thơ.
                    <p style="#0066ff"><span style="text-decoration: underline">Điện thoại:</span>0947756662</p>
                    <p style="#0066ff"><span  style="text-decoration: underline">Hotline:</span>0953247782</p>
                    <p style="#0066ff"><span  style="text-decoration: underline">Email:</span>lovahotlespa8567@gmail.com.vn</p>
                    </div>
                </div>
                <div class="col-md-3"><h5 style="color:#000;padding-top: 20px;">Thông tin khách sạn</h5>
                
                                  
            
                        <div class="footer" >
                          
                            <div class="row" style="margin-left: 15px;margin-right: 15px;">
                                  
                                          <?php
               include 'connect.php';
               $sql= "SELECT MA_PHONG2,HINH_ANH FROM phong LIMIT 6 offset 3";
               $result= mysqli_query($conn, $sql);
               
                 while ($row= mysqli_fetch_array($result)){
            
                    ?>
                                <div class=" col-lg-4 col-md-4 col-sm-4 ">
                                  <?php echo"  <div class='foter_ifo'>";
                                  ?>
                              <?php 
                             
                              echo "<a class='image' href='chitietphong_sp.php?MA_PHONG2=".$row['MA_PHONG2']."'>";
                          // echo"<a href='chitietphong_sp.php?MA_PHONG2=$row[MA_PHONG2]'>"; 
                             echo "<img width='70px'height='50px;'src='css/image/$row[HINH_ANH]'>";
                              echo "</a>";?>
                              
                               
                           
                         
            
                          </div>
                       <?php echo"</div>"?>
                        <?php
                 }
                 ?>
                              
                            </div>
                        </div>
                
                
                
                
                
                
                
                </div>
                <div class="col-md-3">
                    <div class="icon">
                        <i class="fab fa-facebook" style="font-size: 40px;color:blue;"><a class="fa" href="">Facebook</a><br></i><br>
                        <i class="fab fa-google-plus-square" style="font-size: 40px;color:red;"><a class="fa" href="">Google</a></i><br>
                        <i class="fab fa-youtube" style="font-size: 40px;color:red;"><a class="fa" href="">Youtube</a></i><br>
                        <i class="fab fa-twitter" style="font-size: 40px;color:#0099ff;"><a class="fa" href="">Twitter</a></i>
                    </div >
                </div>
            </div>
        </div>
    </body>
</html>