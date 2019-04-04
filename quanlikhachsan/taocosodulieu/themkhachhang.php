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
    </head>
    <body>

             <div id="Themnhanvien ">
            <?php
            include 'connect.php';
            if (isset($_POST['submit'])){
                        $MA_NV2 = $_POST['MA_KH2'] ;
                        $HINH_ANH=$_POST['HINH_ANH'];
                        $HOTEN_KH = $_POST ['HOTEN_KH'] ;
                        $GIOI_TINH = $_POST ['GIOI_TINH'];
                        $NGAY_SINH = $_POST ['NGAY_SINH'];
                        $DIA_CHI = $_POST['DIA_CHI'];
                        $SO_DT = $_POST['SO_DT'];
                $sql = "insert into khachhang(MA_KH2 ,HINH_ANH, HOTEN_KH ,GIOI_TINH , NGAY_SINH, DIA_CHI , SO_DT)values('".$_POST['MA_KH2']."','".$_POST['HINH_ANH']."','".$_POST['HOTEN_KH']."','".$_POST['GIOI_TINH']."','".$_POST['NGAY_SINH']."','".$_POST['DIA_CHI']."','".$_POST['SO_DT']."')";
		if(mysqli_query($conn,$sql)){
			header('Location:themkhachhang.php');
		}else{
			echo"Error".mysqli_error($conn);
	 	 }
    }
            
            ?>
            <form name="themsv" action="" method="post">
                <div>
        <label align="center" style="font-weight: bold;">Mã khách hàng  </label>
        <input name="MA_KH2" id="tensv" type="text" placeholder="" /> <br><br>
        <label align="center" style="font-weight: bold;">Tên khách hàng </label>
        <input name="HOTEN_KH" id="tensv" type="text" placeholder="" /> <br><br>
        <label align="center" style="font-weight: bold;">Giới tính</label>
                <select name="GIOI_TINH">
                    <option value="1">Nam</option>
                    <option value="0">Nữ</option>
                </select><br><br>
       <label align="center" style="font-weight: bold;">Ngày tháng năm sinh  </label>
       <input name="NGAY_SINH" id="tensv" type="date" placeholder="" /> <br><br>
        <label align="center" style="font-weight: bold;">Địa chỉ</label>
        <input name="DIA_CHI" type="text" placeholder="" /> <br><br>
         <label align="center" style="font-weight: bold;">Số điện thoại</label>
        <input name="SO_DT" type="text" placeholder="" /> <br><br>
        <input name="submit" type="submit" value="Thêm" /> 
      
    </div>
             </div>
</form>
       
        <div id="hienthikhachhang">
            <h3>Thông tin khách hàng </h3>
            <table  width="100%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Mã khách hàng</td>
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
                        $MA_KH2 = $row ['MA_KH2'] ;
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
                        echo "<td>$MA_KH2</td>";
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

    </body>
</html>
