  <?php
    include 'connect.php';
       
        $NGAY_DEN=$_POST['NGAY_DEN'];
        $NGAY_DI=$_POST['NGAY_DI'];
       
        $re= "update phieudatphong set NGAY_DEN='$NGAY_DEN',NGAY_DI='$NGAY_DI'";
        $so= mysqli_query($conn, $re)or die("loi");
        	if(($so)){
			header('location:trangdatphong1.php');
		}else{
			echo "Error".mysqli_error($conn);
		}
	
        ?>