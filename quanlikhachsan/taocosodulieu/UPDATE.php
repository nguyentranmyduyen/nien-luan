 
 
        <?php
    include 'connect.php';
        $MA_NV2=$_POST['MA_NV2'];
        $TEN_NV=$_POST['TEN_NV'];
        $GIOI_TINH=$_POST['GIOI_TINH'];
        $NGAY_SINH=$_POST['NGAY_SINH'];
        $DIA_CHI=$_POST['DIA_CHI'];
        $SO_DT=$_POST['SO_DT'];
        $re= "update nhanvien set TEN_NV='$TEN_NV',GIOI_TINH='$GIOI_TINH',NGAY_SINH='$NGAY_SINH',DIA_CHI='$DIA_CHI',SO_DT='$SO_DT' where MA_NV2='$MA_NV2'";
        $so= mysqli_query($conn, $re)or die("loi ");
        	if(($so)){
			header('location:themkhachhang.php');
		}else{
			echo "Error".mysqli_error($conn);
		}
	
        ?>