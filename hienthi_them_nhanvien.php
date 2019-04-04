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
                        $MA_NV2 = $_POST['MA_NV2'] ;
                        $TEN_NV = $_POST ['TEN_NV'] ;
                        $GIOI_TINH = $_POST ['GIOI_TINH'];
                        $NGAY_SINH = $_POST ['NGAY_SINH'];
                        $DIA_CHI = $_POST['DIA_CHI'];
                        $SO_DT = $_POST['SO_DT'];
                $sql = "insert into nhanvien(MA_NV2 , TEN_NV ,GIOI_TINH , NGAY_SINH, DIA_CHI , SO_DT)values('".$_POST['MA_NV2']."','".$_POST['TEN_NV']."','".$_POST['GIOI_TINH']."','".$_POST['NGAY_SINH']."','".$_POST['DIA_CHI']."','".$_POST['SO_DT']."')";
		if(mysqli_query($conn,$sql)){
			header('Location:hienthi_them_nhanvien.php');
		}else{
			echo"Error".mysqli_error($conn);
	 	 }
    }
            
            ?>
             
            <form name="themsv" action="" method="post">
                
        <label align="center" style="font-weight: bold;">Mã nhân viên  </label>
        <input name="MA_NV2" id="tensv" type="text" placeholder="" /> <br><br>
        <label align="center" style="font-weight: bold;">Tên nhân viên </label>
        <input name="TEN_NV" id="tensv" type="text" placeholder="" /> <br><br>
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
            </form>
    </div>
          

       
        <div id="hienthinhanvien">
            <h3>Thông tin nhân viên </h3>
             <table  width="100%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Mã nhân viên</td>
                    <td>Họ tên nhân viên </td>
                    <td>Giới tính </td>
                    <td>Ngày tháng năm sinh</td>
                    <td>Đại chỉ</td>
                    <td>Số điện thoại</td>
                    <td>Sửa</td>
                    <td>Xóa </td>
                    
                </tr>
                     <?php
                     include 'connect.php';
                $sql= "SELECT * FROM nhanvien";
                $result= mysqli_query($conn, $sql);
               if (mysqli_num_rows($result)>0){
                    while ($row= mysqli_fetch_array($result)){
                        $MA_NV2 = $row ['MA_NV2'] ;
                        $TEN_NV = $row ['TEN_NV'] ;
                        if ($row ['GIOI_TINH']  == 1 ){
                            $GIOI_TINH = "Nam";
                        }else {
                            $GIOI_TINH = "Nữ";
                        }
                            
                        $NGAY_SINH = $row ['NGAY_SINH'];
                        $DIA_CHI = $row ['DIA_CHI'];
                        $SO_DT = $row ['SO_DT'];
                        echo "<tr>
                            <td>$MA_NV2</td>
                            <td>$TEN_NV</td>
                            <td>$GIOI_TINH</td>
                            <td>$NGAY_SINH</td>
                            <td>$DIA_CHI</td>
                            <td>$SO_DT</td>
                            <td><a href='sua_nhanvien.php?MA_NV2=".$row['MA_NV2']."'>Sửa</a></td>
                            <td><a href='xoa_nhanvien.php?MA_NV2=".$row['MA_NV2']."'>Xóa</a></td>
                        </tr>";
                    }
                }
                ?>
                <!-- xóa nhân viên -->
   
                <!-- đóng xóa nhân viên -->
                        </table>
      
        </div>
        
    </body>
</html>
