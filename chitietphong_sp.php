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
        <link href="css/chitietphong_sp.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div> <?php include_once 'connect.php';
                    include 'header.php';
              ?>
        </div>
        <div id="chitiet">
            <div class="row">
                <div class="col-md-3">
                    <h5 style=" background: #ff6666;height: 30px; width: 100%;text-align: center;">Dịch vụ</h5>
                    <a href="tranguudai.php"> <img style="padding-bottom: 30px; width:100%; height:200px;" src="css/image/maxresdefault-2.jpg" alt=""/></a>
                    <a href="tranguudai.php"><img style="padding-bottom: 30px;width:100%; height:200px;" src="css/image/7870.jpg_wh1200.jpg" alt=""/></a>
                    <a href="tranguudai.php">
                        <img style="padding-bottom: 30px;width:100%;" src="css/image/cbm1398308172.jpg" alt=""/></a>
                </div>
                <div class="col-md-9">
                    <h1 style="padding-left: 100px;">Thông tin chi tiết phòng </h1>
                    <div class="chitiet_sp">
                        <?php
                            $MA_PHONG2=$_GET['MA_PHONG2'];
                            
                            $sql="SELECT MA_PHONG2,HINH_ANH,TEN_PHONG,DON_GIA,DON_VI_TINH from phong where MA_PHONG2='$MA_PHONG2'";
                            $result = mysqli_query($conn, $sql);
                            $row= mysqli_fetch_array($result);
                            echo "<img class='img'width='900px;' height='350px'src='css/image/$row[HINH_ANH]'>";
               
                            echo "<div class='ifo_chitiet'>";
                            echo" <h1>$row[TEN_PHONG]</h1>";
                            echo number_format("$row[DON_GIA]" ),0,"$row[DON_VI_TINH]";
                            echo" <a href='trangdatphong2.php?MA_PHONG2=$MA_PHONG2'>Đặt phòng</a></td>";
                            echo" </div>";
                         ?>
                    </div>
                    
                    <div id="hinhanh_lienquan">
                        <h2 style="padding-left: 100px;" >Hình ảnh liên quan </h2>
                        <div class="row" style="margin-left: 15px;margin-right: 15px;">
                            <?php
                               
                                $sql= "SELECT MA_PHONG2,HINH_ANH FROM phong LIMIT 6 offset 3";
                                $result= mysqli_query($conn, $sql);
                                while ($row= mysqli_fetch_array($result)){
                            ?>
                            <div class=" col-lg-2 col-md-2 col-sm-2 col-xl-2 col-xs-2">
                                <?php echo"  <div class='trang_dv'>";?>
                                <?php 
                                    echo "<a href='chitiet_dv.php?MA_PHONG2=".$row['MA_PHONG2']."'>";
                                    // echo"<a href='chitietphong_sp.php?MA_PHONG2=$row[MA_PHONG2]'>"; 
                                    echo "<img width='100%'height='100px;'src='css/image/$row[HINH_ANH]'>";
                                    echo "</a>";?>
                            </div>
                            <?php echo"</div>"?>
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