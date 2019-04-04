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
        <link href="css/trangphong.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div><?php include 'header.php'; ?></div>
        <div><?php include 'sideshow.php'; ?> </div>
         <div class="chonphong1">
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
           
            $sql1="SELECT MA_PHONG2,HINH_ANH,DON_GIA from phong ";
            
            $result1 = mysqli_query($conn, $sql1);
            $row= mysqli_fetch_array($result1);
          
           echo "<div class='ifo_phong'>";
              // echo" <h1>$row[TEN_PHONG]</h1>";
            echo "<a href='chitietphong_sp.php?MA_PHONG2=".$row['MA_PHONG2']."'>";
            echo "<img class='imag1' width='100%'height='400px;'src='css/image/$row[HINH_ANH]'>";
                              echo "</a>";
               echo" <p class='gia1'>$row[DON_GIA]</p>";
             echo" <a class='dat1' href='chitietphong_sp.php?MA_PHONG2=".$row['MA_PHONG2']."'>Đặt phòng ngay</a>";
           echo" </div>";
                        ?>
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
            <div class="sanpham">
                <div class="row">
                    <div class="col-md-3">
                <h5 style="color: #fff;background: #0000ff;height: 30px; width: 100%;text-align: center;">Khuyến mãi </h5>
                <img width="300px"src="css/image/340055f001b326f15836d5d90e39a4d61.gif" alt=""/>
                <img width="100%" src="css/image/khuynmai.jpg" alt=""/>
                <img width="100%"src="css/image/in-voucher-print-da-nang-sale-the-giam-gia-1.jpg" alt=""/>
                <img width="100%"src="css/image/cover web QC-01.jpg" alt=""/>
                    </div>  
                    <div class="col-md-9">
                       
                        <div class="sanpham1">
                             <div class="tilte_sp">Danh sách phòng</div>
                            <div class="row">
                                
           
            <?php
               include 'connect.php';
               $sql= "SELECT MA_PHONG2,HINH_ANH,TEN_PHONG,DON_GIA,DON_VI_TINH FROM phong ";
               $result= mysqli_query($conn, $sql);
               
                 while ($row= mysqli_fetch_array($result)){
            
                    ?>
                                <div class=" col-lg-4 col-md-4 col-sm-4 ">
                              <?php 
                             
                              echo "<a href='chitietphong_sp.php?MA_PHONG2=".$row['MA_PHONG2']."'>";
                          // echo"<a href='chitietphong_sp.php?MA_PHONG2=$row[MA_PHONG2]'>"; 
                             echo "<img width='300px'height='350px;'src='css/image/$row[HINH_ANH]'>";
                              echo "</a>";?>
                               
                           <a href="" class="noidung_sp"><?php   echo "$row[TEN_PHONG]";?></a></br>
                          <p class="dongia_sp">Giá:&nbsp; <?php  echo number_format("$row[DON_GIA]" ),0,"$row[DON_VI_TINH]";?></p>
                          <?php echo" <a class='dat_phong' href='chitietphong_sp.php?MA_PHONG2=".$row['MA_PHONG2']."'>Đặt phòng </a>";?>
                          
                       </div>
                             <!--   <script type="text/javascript">
                                    $(document).ready(function(){
                                        $("#addcart<?php //echo"$MA_PHONG2";?>").click(function(){
                                            var id =$("#ma_sp<?php //echo "$MA_PHONG2";?>").attr('id');
                                               $.ajxa({
                                                type:"POST",
                                                 url:"trangdatphong2.php",
                                                   data:{id:id},
                                                   cache:false;
                                                   success:function(result){
                                                      alert("result");
                                                     window.location.reload();
                                                  }
                                               });
                                   });
                             });
                                </script>-->
                                    
                    <?php
                    }
           
                
             ?>     
                    </div>
                    </div>
                </div>
            </div>
            </div>
                  

        <div><?php include 'footer.php'; ?></div>
    </body>
</html>