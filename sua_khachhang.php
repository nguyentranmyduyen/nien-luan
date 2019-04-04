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
 <?php

	include 'connect.php';
	$MA_KH2=$_GET['MA_KH2'];
		$sql = "select * from khachhang where MA_KH2='$MA_KH2'";
                $result= mysqli_query($conn, $sql);
		$rs= mysqli_fetch_array($result);
                //print_r($rs)
		
?>

        <div>
            <form name="suasv" action="xl_sua_khachhang.php" method="post">
                <div>
        <label align="center" style="font-weight: bold;">Mã khách hàng </label>
        <input name="MA_KH2" id="tensv" type="text" value="<?php echo $rs['MA_KH2']; ?>"/> <br><br>
        <label align="center" style="font-weight: bold;">Tên khách hàng </label>
        <input name="HOTEN_KH" id="tensv" type="text"  value="<?php echo $rs['HOTEN_KH']; ?>"/> <br><br>
        <label align="center" style="font-weight: bold;">Giới tính</label>
                <select name="GIOI_TINH">
                    <option <?php if($rs['GIOI_TINH']=='1') echo 'selected="selected"'; else echo ""; ?> value="1">Nam</option>
                    <option <?php if($rs['GIOI_TINH']=='0') echo 'selected="selected"'; else echo ""; ?> value="0">Nữ</option>
                </select><br><br>
       <label align="center" style="font-weight: bold;">Ngày tháng năm sinh  </label>
       <input name="NGAY_SINH" id="tensv" type="date"  value="<?php echo $rs['NGAY_SINH']; ?>"/> <br><br>
        <label align="center" style="font-weight: bold;">Địa chỉ</label>
        <input name="DIA_CHI" type="text" value="<?php echo $rs['DIA_CHI']; ?>"/> <br><br>
         <label align="center" style="font-weight: bold;">Số điện thoại</label>
        <input name="SO_DT" type="text"  value="<?php echo $rs['SO_DT']; ?>"/> <br><br>
        <input name="submit" type="submit" value="Sửa" /> <br><br>
    </div>
</form>
        </div>
    </body>
</html>

