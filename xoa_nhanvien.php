             <?php
	include 'connect.php';
	$MA_NV2= $_GET['MA_NV2'];
		$sql = "delete from nhanvien where MA_NV2='$MA_NV2'";
                $result= mysqli_query($conn, $sql);
		if(($result)){
			header('location:hienthi_them_nhanvien.php');
		}else{
			echo "Error".mysqli_error($conn);
		}
	
		
 
 ?>