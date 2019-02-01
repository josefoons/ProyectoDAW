<?php
session_start();
require_once("conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();
$mensaje = $_GET['mensaje'];
$mail = $_GET['mail'];
$id = $_GET['id'];
$elo = $_GET['elo'];

//IMPORTANTE PARA FILTRAR ESPACIOS Y CARACTERES RAROS
$mensaje2 = mysqli_real_escape_string($conn, $mensaje);
$mail2 = mysqli_real_escape_string($conn, $mail);


$query = "UPDATE usuario SET mensaje = '$mensaje2', mail = '$mail2', elo = '$elo' WHERE id='$id';";
if(mysqli_query($conn, $query)){ 
    echo "OK";
} else { 
    echo "ERROR"; 
}


?>