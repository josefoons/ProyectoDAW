<?php
session_start();
require_once("../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();
$id = $_GET['id'];
$rango = $_GET['rango'];


if($rango == 1){
    $query = "UPDATE usuario SET rolWeb = 0 WHERE id='$id';";
    if(mysqli_query($conn, $query)){ 
        echo "OK";
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