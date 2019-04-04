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
        <div id="themchitietphieu">
            <?php
              if (isset($_POST['submit'])){
                        $STT_PDP = $_POST['MA_KH2'] ;
                        $HOTEN_KH = $_POST ['HOTEN_KH'] ;
                        $GIOI_TINH = $_POST ['GIOI_TINH'];
                $sql = "insert into khachhang(MA_KH2 , HOTEN_KH ,GIOI_TINH , NGAY_SINH, DIA_CHI , SO_DT)values('".$_POST['MA_KH2']."','".$_POST['HOTEN_KH']."','".$_POST['GIOI_TINH']."','".$_POST['NGAY_SINH']."','".$_POST['DIA_CHI']."','".$_POST['SO_DT']."')";
		if(mysqli_query($conn,$sql)){
			header('Location:themkhachhang.php');
		}else{
			echo"Error".mysqli_error($conn);
	 	 }
    }
            
            ?>
            <form name="" action="" method="">
                <label>STT_PDP</label>
                <input name="STT_PDP" type="text" placeholder=""/></br></br>
                <label>Số lượng</label>
                <select name="SO_LUONG">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                </select></br></br>
                <label>Đơn giá</label>
                <input name="DON_GIA" type="text">
                <input name="submit" type="submit" value="Thêm"/>
            </form>
        </div>
        <div id="hienthikhachhang">
            <h3>Thông tin khách hàng </h3>
            <table  width="100%" border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>STT_PDP</td>
                    <td>Số lượng</td>
                    <td>Đơn giá</td>
                    <td>Sửa</td>
                    <td>Xóa </td>
                    
                </tr>
                     <?php
                     include 'connect.php';
                $sql= "SELECT * FROM chitietphieu";
                $result= mysqli_query($conn, $sql);
               if (mysqli_num_rows($result)>0){
                    while ($row= mysqli_fetch_array($result)){
                        $STT_PDP= $row ['STT_PDP'] ;
                        $SO_LUONG = $row ['SO_LUONG'] ;  
                        $DON_GIA = $row ['DON_GIA'];
                        echo "<tr>
                            <td>$STT_PDP</td>
                            <td>$SO_LUONG</td>
                            <td>$DON_GIA</td>
                            <td><a href='suachitietphieu.php?STT_PDP=".$row['STT_PDP']."'>Sửa</a></td>
                            <td><a href='xoachitietphieu.php?STT_PDP=".$row['STT_PDP']."'>Xóa</a></td>
                        </tr>";
                    }
                }
                ?>
               
                        </table>
        </div>
    </body>
</html>