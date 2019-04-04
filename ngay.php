<html>
   
   <head>
      <title>Tính khoảng cách giữa hai ngày bất kì trong PHP</title>
   </head>
   <body>
   
       <?php
        $ngay_bat_dau = "2016-02-14";  
		$ngay_ket_thuc = "2016-09-28";  
		  
		$hieu_so = abs(strtotime($ngay_ket_thuc) - strtotime($ngay_bat_dau));  
		  
		$nam = floor($hieu_so / (365*60*60*24));  
		$thang = floor(($hieu_so - $nam * 365*60*60*24) / (30*60*60*24));  
		$ngay = floor(($hieu_so - $nam * 365*60*60*24 - $thang*30*60*60*24)/ (60*60*24));  
		  
		printf(" %d ngày", $ngay);
       ?>
       
   </body>
</html>