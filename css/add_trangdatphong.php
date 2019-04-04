<?php

    session_start();
                    $MA_PHONG2=$_GET['MA_PHONG2'];
                
                   
                    if(isset($_SESSION['cart'][$MA_PHONG2])){
                        $soluong=$_SESSION['cart'][$MA_PHONG2];
                    } else {
                        $soluong=1; 
}
                   
                    
                   $flag=null;
                    $_SESSION['cart'][$MA_PHONG2]=$soluong;
                    header('location:trangdatphong2.php');
                    exit();