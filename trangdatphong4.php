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
        <link href="css/trangdatphong4.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
  <div id="header"> <?php include 'header.php';?></div>
  <div id="content">
      <div class="content_center">
     
      <div class="info_ho">
          <div class="row">
       <div class="col-md-3" ><span class="time">1</span>&nbsp;Thời Gian Đặt Phòng</div>
       <div class="col-md-3"><span class="chonphong ">2</span>&nbsp;Chọn Phòng</div>
       <div class="col-md-3"><span class="inf_rom">3</span>&nbsp;Thông Tin Cá Nhân  </div>
       <div class="col-md-3" ><span class="money">4</span>&nbsp; Thông tin Đặt Phòng </div>
            </div>
      </div>
      <div class="soluong">
                
        <div id="hienthikhachhang">
            <h3>Thông tin khách hàng </h3>
            <table  width="100%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <!--<td>Mã khách hàng</td>-->
                    <!--<td>Hình ảnh</td>-->
                    <td>Họ tên khách hàng </td>
                    <td>Giới tính </td>
                    <td>Ngày tháng năm sinh</td>
                    <td>Đại chỉ</td>
                    <td>Số điện thoại</td>
                    <td>Sửa</td>
                    <td>Xóa </td>
                    
                </tr>
                     <?php
                     include 'connect.php';
                $sql= "SELECT * FROM khachhang";
                $result= mysqli_query($conn, $sql);
               if (mysqli_num_rows($result)>0){
                    while ($row= mysqli_fetch_array($result)){
                       // $MA_KH2 = $row ['MA_KH2'] ;
                      // $HINH_ANH=$row['HINH_ANH'];
                        $HOTEN_KH = $row ['HOTEN_KH'] ;
                        if ($row ['GIOI_TINH']  == 1 ){
                            $GIOI_TINH = "Nam";
                        }else {
                            $GIOI_TINH = "Nữ";
                        }
                          
                        $NGAY_SINH = $row ['NGAY_SINH'];
                        $DIA_CHI = $row ['DIA_CHI'];
                        $SO_DT = $row ['SO_DT'];
                        echo "<tr>";
                       // echo "<td>$MA_KH2</td>";
                          //  echo '<td><img height=50px width=50px src="data:image/jpeg;base64,'.base64_encode( $row['HINH_ANH'] ).'"/></td>';
                             echo "<td>$HOTEN_KH</td>";
                             echo "<td>$GIOI_TINH</td>";
                             echo "<td>$NGAY_SINH</td>";
                             echo "<td>$DIA_CHI</td>";
                             echo "<td>$SO_DT</td>";
                            echo "<td><a href='suakhachhang.php?MA_KH2=".$row['MA_KH2']."'>Sửa</a></td>";
                            echo "<td><a href='xoakhachhang.php?MA_KH2=".$row['MA_KH2']."'>Xóa</a></td>";
                            echo "</tr>";
                       
                        

                    }
                }
                ?>
               
                        </table>
        </div>
          <div class="trang1">
             
           
            <table  width="100%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                   
                    <td>Ngày đến </td>
                    <td>Ngày đi</td>
                    <td>Sửa</td>
                    <td>Xóa </td>
                    
                </tr>
                     <?php
                     include 'connect.php';
                $sql= "SELECT * FROM phieudatphong";
                $result= mysqli_query($conn, $sql);
               if (mysqli_num_rows($result)>0){
                    while ($row= mysqli_fetch_array($result)){
                       
                          
                        $NGAY_DEN = $row ['NGAY_DEN'];
                        $NGAY_DI= $row ['NGAY_DI'];
                       
                        echo "<tr>";
                      
                             echo "<td>$NGAY_DEN</td>";
                             echo "<td>$NGAY_DI</td>";
                            echo "<td><a href='suakhachhang.php?MA_KH2=".$row['MA_KH2']."'>Sửa</a></td>";
                            echo "<td><a href='xoakhachhang.php?MA_KH2=".$row['MA_KH2']."'>Xóa</a></td>";
                            echo "</tr>";
                       
                        

                    }
                }
                ?>
               
                        </table>
        </div>

          </div>

      </div>
      <a href="trangdatphong3.php" class="tieptheo2"> Thay đổi</a>
      <a href="" class="tieptheo1"> ĐẶT PHÒNG</a>
      
      </div>
  </div>
    <div id="footer"><?php include 'footer.php';?></div>
        </div>
    </body>
</html>
