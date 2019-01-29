<?php
include('conexion.php');
session_start();
$id = $_GET['id'];
$rango = $_GET['rango'];
//echo "id: " . $id . " rango: " . $rango; 


if($rango == 1){
    $query = "UPDATE usuario SET rolWeb = 0 WHERE id='$id';";
    if(mysqli_query($conn, $query)){ 
        echo "OK";
        if($_SESSION['rolWeb'] == 1){
            $_SESSION['rolWeb'] = 0;
        }
    } else { 
        echo "ERROR"; 
    }
} else {
    $query = "UPDATE usuario SET rolWeb = 1 WHERE id='$id';";
    if(mysqli_query($conn, $query)){ 
        echo "OK";
    } else { 
        echo "ERROR"; 
    }
}



?>