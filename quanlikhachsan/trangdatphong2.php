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
        <link href="css/trangdatphong2.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
  <div id="header"> <?php include 'header.php';?></div>
  <div id="content">
      <div class="content_center">
      <img class="sao" src="css/image/340055f001b326f15836d5d90e39a4d61.gif" alt=""/>

      <p style="text-align: center;font-size: 40px;">LOVA<spam style="font-size: 25px;">HOTEL</spam><span style="font-size: 16px;">SPA</span></p>
      <div class="info_ho">
          <div class="row">
       <div class="col-md-3" ><span class="time">1</span>&nbsp;Thời Gian Đặt Phòng</div>
       <div class="col-md-3"><span class="chonphong ">2</span>&nbsp;Chọn Phòng</div>
       <div class="col-md-3"><span class="inf_rom">3</span>&nbsp;Thông Tin Cá Nhân </div>
       <div class="col-md-3" ><span class="money">4</span>&nbsp; Thông Tin Đặt Phòng </div>
            </div>
      </div>
      </div>
      <div class="soluong">
          <div style="padding-left: 20px;" id="hienthinhanvien">
            
         <h3>Danh sách phòng </h3>
        
            <table  width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr >
                   
                    <td  class="col-md-4"> </td>
                    <td class="col-md-4">Thông tin phòng </td>
                    <td style="text-align: center;"class="col-md-2">Số lượng </td>
                    <td class="col-md-2">Chi phí</td>
                    
                </tr>
                   <?php
                     include 'taocosodulieu/connect.php';
                $sql= "SELECT * FROM phong";
                $result= mysqli_query($conn, $sql);
               if (mysqli_num_rows($result)>0){
                    while ($row= mysqli_fetch_array($result)){
                     
                        $HINH_ANH = $row ['HINH_ANH'] ;
                        $NOI_DUNG = $row ['NOI_DUNG'];
                      
                        $SO_LUONG = $row ['SO_LUONG'];
                     
                        echo "<tr>";
                           
                         echo '<td><p><img height=150px width=250px src="data:image/jpeg;base64,'.base64_encode( $row['HINH_ANH'] ).'"/></p></td>';

                           echo "<td>$NOI_DUNG</td>";
                          
                         echo "<td><p>$SO_LUONG<p></td>";
                         
                       echo "</tr>";
                                            }
                }
                
             ?>
            </table>
    
            
     </div>
              
        </div>

      
      <a href="trangdatphong3.php" class="tieptheo1"> ĐẶT PHÒNG</a>
      
      </div>
  </div>
    <div id="footer"><?php include 'footer.php';?></div>
        </div>
    </body>
</html>