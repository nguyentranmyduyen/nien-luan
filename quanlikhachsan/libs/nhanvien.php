<?php

global $conn;


function connect_db()
{

    global $conn;
    
    
    if (!$conn){
        $conn = mysqli_connect('localhost', 'root', '', 'hoc') or die ('Can\'t not connect to database');
     
        mysqli_set_charset($conn, 'utf8');
    }
}
function disconnect_db()
{
    
    global $conn;
    
 
    if ($conn){
        mysqli_close($conn);
    }
}


function get_all_nhanvien()
{

    global $conn;
    
 
    connect_db();

    $sql = "select * from tb_sinhvien";
    
 
    $query = mysqli_query($conn, $sql);
    
    // Mảng chứa kết quả
    $result = array();

    if ($query){
        while ($row = mysqli_fetch_assoc($query)){
            $result[] = $row;
        }
    }
    return $result;
}

function get_nhanvien($nhanvien_id)
{
    global $conn;
    connect_db();
    $sql = "select * from tb_sinhvien where id = {$nhanvien_id}";

    $query = mysqli_query($conn, $sql);
    

    $result = array();

    if (mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
        $result = $row;
    }
    
    return $result;
}

function add_nhanvien($nhanvien_name, $nhanvien_sex, $nhanvien_birthday)
{
 
    global $conn;
    
 
    connect_db();
    

    $nhanvien_name = addslashes($nhanvien_name);
    $nhanvien_sex = addslashes($nhanvien_sex);
    $nhanvien_birthday = addslashes($nhanvien_birthday);
 
    $sql = "
            INSERT INTO tb_sinhvien(name, sex, birthday) VALUES
            ('$nhanvien_name','$nhanvien_sex','$nhanvien_birthday')
    ";

    $query = mysqli_query($conn, $sql);
    
    return $query;
}

function edit_nhanvien($nhanvien_id, $nhanvien_name, $nhanvien_sex, $nhanvien_birthday)
{
   
    global $conn;
    

    connect_db();
    
 
    $nhanvien_name       = addslashes($nhanvien_name);
    $nhanvien_sex        = addslashes($nhanvien_sex);
    $nhanvien_birthday   = addslashes($nhanvien_birthday);
    

    $sql = "
            UPDATE tb_sinhvien SET
            name = '$nhanvien_name',
            sex = '$nhanvien_sex',
            birthday = '$nhanvien_birthday',
            WHERE id = '$nhanvien_id'
    ";
    
  
    $query = mysqli_query($conn, $sql);
    
    return $query;
}



function delete_nhanvien($nhanvien_id)
{
    global $conn;
 
    connect_db();

    $sql = "
            DELETE FROM tb_sinhvien
            WHERE id = $nhanvien_id
    ";
    
    $query = mysqli_query($conn, $sql);
    
    return $query;
}