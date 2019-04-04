<?php 
if (isset($_GET['thamso'])){$tham_so=$_GET['thamso'];}else {$tham_so="";}
switch ($tham_so){
case "datphong":
    include("trangdatphong2.php");
break; 
}
?>