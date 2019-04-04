             <?php
	include 'connect.php';
	$MA_KH2= $_GET['MA_KH2'];
		$sql = "delete from khachhang where MA_KH2='$MA_KH2'";
                $result= mysqli_query($conn, $sql);
		if(($result)){
			header('location:themkhachhang.php');
		}else{
			echo "Error".mysqli_error($conn);
		}
	
		
 
 ?>