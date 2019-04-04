<?php
session_start();
$soluongmoi = $_POST['slm'];
$MA_PHONG2 = $_POST['MA_PHONG2'];
$_SESSION['cart'][$MA_PHONG2] = $soluongmoi;
?>