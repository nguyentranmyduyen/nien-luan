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
        <link href="css/index.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
<div id="content">
    <div class="search">
        <div class="row">
               <?php
include 'connect.php';

?>

        <form action="" method="get">
            Tìm Kiếm : <input type="text" name="search" style="font-size: 20px;width: 500px;" />
            <button type="submit" style="font-size: 20px;width: 100px; "name="submit">search</button>
        </form>
        <?php
        if (isset( $_GET['submit']) && $_GET["search"] != '') {
            $search = $_GET['search'];
  $query = "SELECT * FROM phong WHERE (TEN_PHONG like '%$search%')  ";
     
            $sql = mysqli_query($conn, $query);
 			//echo $sql;
                         $num = mysqli_num_rows($sql);
            if ($num > 0) {
                echo $num." ket qua tra ve voi tu khoa <b>".$search."</b><br>";
             
 
                    // Vòng lặp while & mysql_fetch_assoc dùng để lấy toàn bộ dữ liệu có trong table và trả về dữ liệu ở dạng array.
                  
                     foreach( $sql as $row ) {
                   
                ?>
                                <div class=" col-lg-6 col-md-6">
                                  <?php echo"  <div class='hienthi_search'>";
                                  ?>
                              <?php 
                             
                              echo "<a class='' href='chitietphong_sp.php?MA_PHONG2=".$row['MA_PHONG2']."'>";
                          // echo"<a href='chitietphong_sp.php?MA_PHONG2=$row[MA_PHONG2]'>"; 
                             echo "<img width='100%;'height='350px;'src='css/image/$row[HINH_ANH]'>";
                              echo "</a><br>";?>
                              
                                    <h4 style="padding-left:150px;"><?php echo"<br>$row[TEN_PHONG]"?></h4><br>
                                    <a href="" style="color:#000;padding-left: 150px;"><?php   echo number_format("$row[DON_GIA]" ),0,"$row[DON_VI_TINH]";?></a></br>
                           
                        
                           <!--<p class=''><?php// echo"$row[DON_GIA]"?></p>-->
            
                          </div>
                       <?php echo"</div>"?>
                        <?php
                 }
                 
                   
                
            }
                else {
                    echo "Khong tim thay ket qua!";
                }
                ?></div><?php
            }?>
            </div>
    </div>
        
        
              
      
</div>
           <div class="chonphong">
                <div class="row"style="margin-left: 15px;margin-right: 15px;">
                    <div class="col-md-4">
                        <h2>
                            Chọn phòng phù hợp nhất
                        </h2>
                        <p>Quý khách có thể đặt phòng tại Grand cũng như đặt bằnn tại Khách Sạn, chúng tôi giúp quý khách lên kế hoạch cho một chuyến du lịch “Dễ dàng”, “Hài lòng” và “Tiết kiệm”. Nhanh tay đặt phòng giá rẻ nhất tai Hà Nội và tận hưởng kì nghỉ thú vị của quý khách ngay từ bây giờ nhé!</p>
                        <a style="color: #007bff;text-decoration: underline;" href="tranglienhe.php"> Liên hệ chúng tôi</a> <i class="fas fa-arrow-alt-right"></i>
                    </div>
                    <div class="col-md-8">
                        <?php
                         
            include 'connect.php';
           
            $sql1="SELECT MA_PHONG2,HINH_ANH,DON_GIA ,DON_VI_TINH from phong ";
            
            $result1 = mysqli_query($conn, $sql1);
            $row= mysqli_fetch_array($result1);
          
           echo "<div class='ifo_phong'>";
              // echo" <h1>$row[TEN_PHONG]</h1>";
            echo "<a href='chitietphong_sp.php?MA_PHONG2=".$row['MA_PHONG2']."'>";
            echo "<img class='imag' width='100%'height='400px;'src='css/image/$row[HINH_ANH]'>";
                              echo "</a>";?>
                        <p class='gia'><?php echo number_format("$row[DON_GIA]"),0,"$row[DON_VI_TINH]"?></p>
             <?php echo" <a class='dat' href='chitietphong_sp.php?MA_PHONG2=".$row['MA_PHONG2']."'>Đặt phòng ngay</a>";
           echo" </div>";?>
                        
                       <!-- <img class="imag"width="100%" height="300px;"src="css/image/noi-that-phong-ngu-tan-hoang-gia.jpg" alt=""/>-->
                      
                        <div class="row">
                            <div class="col-md-6">
                                 <i class="fas fa-concierge-bell"></i><h2>Không gian sang trọng</h2>
                        <p>Nội thất được thiết kế tinh tế, đầy đủ. Các phòng đều được trang bị các thiết bị hiện đại, ấm áp, sang trọng.</p> 
                            </div>
                            <div class="col-md-6">
                                                  <i class="fas fa-wifi"></i><h2>Wifi Free</h2>
                        <p>Miễn phí sử dụng Internet (bao gồm Wi-fi và Internet có dây). Wifi ổn định 24/24</p>
                               
                            </div>
                        </div> 
                       
                    </div>
                </div>
         </div>
                        <div class="content1" >
                            <h2 style="color: #000;text-align: left;padding-left: 20px;">Danh sách phòng nổi bậc </h2>
                            <div class="row" style="margin-left: 15px;margin-right: 15px;">
                                  
                                          <?php
               include 'connect.php';
               $sql= "SELECT MA_PHONG2,HINH_ANH,TEN_PHONG ,TEN_PHONG ,DON_GIA,DON_VI_TINH FROM phong LIMIT 6 ";
               $result= mysqli_query($conn, $sql);
               
                 while ($row= mysqli_fetch_array($result)){
            
                    ?>
                                <div class=" col-lg-4 col-md-4 col-sm-4 ">
                                  <?php echo"  <div class='room1'>";
                                  ?>
                              <?php 
                             
                              echo "<a class='image' href='chitietphong_sp.php?MA_PHONG2=".$row['MA_PHONG2']."'>";
                          // echo"<a href='chitietphong_sp.php?MA_PHONG2=$row[MA_PHONG2]'>"; 
                             echo "<img width='350px;'height='300px;'src='css/image/$row[HINH_ANH]'>";
                              echo "</a>";?>
                              
                                <h4 class=''><?php echo"$row[TEN_PHONG]"?></h4>
                                    <a href="" class="overlay1"><?php   echo number_format("$row[DON_GIA]" ),0,"$row[DON_VI_TINH]";?></a></br>
                           
                        
                           <!--<p class=''><?php// echo"$row[DON_GIA]"?></p>-->
            
                          </div>
                       <?php echo"</div>"?>
                        <?php
                 }
                 ?>
                              
                            </div>
                        </div>
   
                <div id="dichvu">
                    
                    <h2 class="info">Dịch vụ của chúng tôi</h2>
                    <p class="info1">Sự đầu tư tỉ mỉ cùng thiết kế sang trọng, trang thiết bị hiện đại và đội ngũ nhân viên chuyên nghiệp chúng tôi sẵn sàng giúp đỡ, đáp ứng nguyện vọng của mọi khách hàng.</p>
                    <div class="row" style="margin-left: 15px;margin-right: 15px;">
                    
                           <?php
               include 'connect.php';
               $sql= "SELECT MA_DV,HINH_ANH,TEN_DV,NOI_DUNG,DON_GIA,DON_VI_TINH FROM dich_vu LIMIT 3 ";
               $result= mysqli_query($conn, $sql);
               
                 while ($row= mysqli_fetch_array($result)){
            
                    ?>
                                <div class=" col-lg-4 col-md-4 col-sm-4 ">
                                  <?php echo"  <div class='tamhoi'>";
                                  ?>
                              <?php 
                             
                              echo "<a href='chitiet_dv.php?MA_DV=".$row['MA_DV']."'>";
                          // echo"<a href='chitietphong_sp.php?MA_PHONG2=$row[MA_PHONG2]'>"; 
                             echo "<img width='100%'height='350px;'src='css/image/$row[HINH_ANH]'>";
                              echo "</a>";?>
                              
                               
                                    <a href="" class="o"><?php   echo number_format("$row[DON_GIA]" ),0,"$row[DON_VI_TINH]";?></a></br>
                            <h2 class=''><?php echo"$row[TEN_DV]"?></h2>
                        
                           <p class=''><?php echo"$row[NOI_DUNG]"?></p>
            
                          </div>
                       <?php echo"</div>"?>
                        <?php
                 }
                 ?>
                            
            
                </div>
                        </div>
                
            
   
       
   
                <div class="sub_content">
                    
                   
                    <h2 style="color:#000;text-align: center; ">Tin tức , sự kiện<br><span class=""style="font-size: 20px;">Cập nhập tin tức mới nhất về những khuyến mãi, tin du lịch, tin giải trí</span></h2>
                    <div class="row" style="margin-left: 15px;margin-right: 15px;">
                  <div class="col-md-5">
                     <video width="100%" height="100%px;" controls controls autoplay muted>
                         <source src="css/image/Giới thiệu Khách Sạn 5 Sao LADALAT - Video 4K.mp4" type="video/mp4"></video>
                </div>
                        
                    <div class="col-md-7" >
                          <?php
                         
            include 'connect.php';
           
            $sql2="SELECT MA_KM,HINH_ANH from khuyenmai ";
            
            $result2 = mysqli_query($conn, $sql2);
            $row= mysqli_fetch_array($result2);
          
           echo "<div class='ifo_phong'>";
              // echo" <h1>$row[TEN_PHONG]</h1>";
            echo "<a href='chitiet_km.php?MA_KM=".$row['MA_KM']."'>";
            echo "<img class='imag' width='100%'height='250px;'src='css/image/$row[HINH_ANH]'>";
                              echo "</a>";
              
           echo" </div>";?>
                            <div class="row">
                                            <?php
               include 'connect.php';
               $sql= "SELECT MA_KM,HINH_ANH FROM khuyenmai LIMIT 2 offset 1 ";
               $result= mysqli_query($conn, $sql);
               
                 while ($row= mysqli_fetch_array($result)){
            
                    ?>
                                <div class=" col-lg-6 col-md-6 ">
                                  <?php echo"  <div class='ifo_khuyenmai'>";
                                  ?>
                              <?php 
                             
                              echo "<a href='chitiet_km.php?MA_KM=".$row['MA_KM']."'>";
                          // echo"<a href='chitietphong_sp.php?MA_PHONG2=$row[MA_PHONG2]'>"; 
                             echo "<img width='100%'height='150px;'src='css/image/$row[HINH_ANH]'>";
                              echo "</a>";?>
                              
                               
                                   
            
                          </div>
                       <?php echo"</div>"?>
                        <?php
                 }
                 ?>
                       
                            </div>
                    </div>
                    </div>
                       <!-- <div class="col-md-5">
                            <h5 style="color: red;font-size: 18px;"> Bà Na Hill</h5>
                            <p>Bà Nà nằm ở xã Hòa Ninh, huyện Hòa Vang, cách trung tâm thành phố Đà Nẵng gần 30 km về hướng Tây Nam.
                                Đây là địa điểm du lịch Đà Nẵng đang nhanh chóng hoàn thiện và phát triển trở thành khu nghỉ dưỡng nổi tiếng thu hút du khách trong nước và quốc tế.</p><spann style="color: #01B0FF">Xem thêm ...</spann>
                        </div>-->
        </div>
        </div>
        </div>
    </body>
</html>