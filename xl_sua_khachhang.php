 
 
        <?php
    include 'connect.php';
        $MA_KH2=$_POST['MA_KH2'];
        $HOTEN_KH=$_POST['HOTEN_KH'];
        $GIOI_TINH=$_POST['GIOI_TINH'];
        $NGAY_SINH=$_POST['NGAY_SINH'];
        $DIA_CHI=$_POST['DIA_CHI'];
        $SO_DT=$_POST['SO_DT'];
        $re= "update khachhang set HOTEN_KH='$HOTEN_KH',GIOI_TINH='$GIOI_TINH',NGAY_SINH='$NGAY_SINH',DIA_CHI='$DIA_CHI',SO_DT='$SO_DT' where MA_KH2='$MA_KH2'";
        $so= mysqli_query($conn, $re)or die("loi");
        	if(($so)){
			header('location:hienthikhachhang.php');
		}else{
			echo "Error".mysqli_error($conn);
		}
	
        ?>