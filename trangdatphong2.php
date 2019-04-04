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
        <link href="css/trangdatphong2.css" rel="stylesheet" type="text/css"/>
        
        <script src="css/jquery/sp_trangdatphong2.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="header"> <?php 
                                include 'header.php';
                                include_once 'connect.php';
                          ?>
        </div>
        
        <div id="content">
            <div class="info_ho">
                <div class="row">
                    <div class="col-md-3" ><span class="time">1</span>&nbsp;Thời Gian Đặt Phòng</div>
                    <div class="col-md-3"><span class="chonphong ">2</span>&nbsp;Chọn Phòng</div>
                    <div class="col-md-3"><span class="inf_rom">3</span>&nbsp;Thông Tin Cá Nhân </div>
                    <div class="col-md-3" ><span class="money">4</span>&nbsp; Thông Tin Đặt Phòng </div>
                </div>
            </div>
     
            <div class="soluong">
                <h3>Danh sách phòng </h3>
                <?php 
                    session_start();
                 
                 $tongtien=0;
                 

                   
                    
                   $flag=null;
                 
                    echo"<table  width='100%' border='1px' cellspacing='0' cellpadding='0'>
                            <tr>
                            
                                <td>Phòng </td>
                                <td>Đơn giá </td>
                                <td>Số lượng</td>
                                <td>Thành tiền </td>
                                <td >Xóa </td>
                            </tr>";
                    if(isset($_SESSION['cart'])){
                        $flag=FALSE;
                    } else {
                        foreach ($_SESSION['cart'] as $MA_PHONG2=>$soluong){
                            if (isset($MA_PHONG2)){
                                $flag=TRUE;
                            } else {
                                $flag=FALSE;
                            }
                        }
                    }
                        if($flag=FALSE){
                            echo "<tr>";
                            echo "<td colspan='5'>bạn chưa đặt phong>";
                            echo "</tr>";
                            echo "</table>";
                            echo "<a href='trangphong.php'>Trở về trang phòng</a>";
                        } else {
                            
                        
                        

                    foreach ($_SESSION['cart'] as $MA_PHONG2=>$soluong){
                       $arr[]="'".$MA_PHONG2."'";
                    }
                  
                    $string= implode(",", $arr);
                    
                   $sql="SELECT MA_PHONG2,TEN_PHONG, DON_GIA  from phong where MA_PHONG2 in ($string)";
         
                   $result = mysqli_query($conn, $sql);
                   
                    while ($row= mysqli_fetch_array($result)){
                   
                    echo" <tr >
                            <td >".$row['TEN_PHONG']."</td>
                            <td >".number_format($row['DON_GIA'])."</td>
                            <td >
                            
                            <select class='tinhsoluong' data-maphong=".$row['MA_PHONG2']." style='border:2px solid #ccc;'> ";
                            
                            $soluong=$_SESSION['cart'][$row['MA_PHONG2']];

                            for($i=1;$i<=10;$i++){
                               // echo"<option>".$i."</option>";
                                if($i==$soluong){
                                     echo"<option value='$i' selected='selected'>$i</option>";
                                }
                                else{
                                    echo"<option value='$i'>$i</option>"; 
                                }
                            }
                           
                    echo"</select>";
                    echo"</td>";
                   

                    $thanhtien=$soluong*$row['DON_GIA'];
                    echo"  <td >".number_format($thanhtien)."</td>";
                    echo"  <td ><a href='delete_san_phong.php?MA_PHONG2=$MA_PHONG2'>Xóa </a></td>";
                    echo" </tr>"; 
                    $tongtien+=$thanhtien;
                    }
                    
                    echo" <tr >";                      
                    echo"   <td colspan='4'>Tổng tiền </td>";
                    echo"   <td >".number_format($tongtien). "</td>";
                    echo"  </table>";
                        }
                ?>
     </div>
              
       
      <a href="trangphong.php" class="tieptheo2">Đặt Thêm </a>
      <a href="trangdatphong3.php" class="tieptheo1"> ĐẶT PHÒNG</a>
      
      </div>
 
    <div id="footer"><?php include 'footer.php';?>
    </div>
    
       
    </body>
</html>