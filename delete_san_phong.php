<?php
session_start();
$MA_PHONG2=$_GET['MA_PHONG2'];
unset($_SESSION['cart'][$MA_PHONG2]);
header('location:trangdatphong2.php');
exit();
?>
