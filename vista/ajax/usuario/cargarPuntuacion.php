<?php
session_start();
require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();
$idPerfil = $_GET['idPerfil'];
$idUsuario = $_GET['idSesion'];

$query = "SELECT * FROM puntuacion WHERE idPerfil='$idPerfil' AND idUsuario='$idUsuario'";
$resultado = mysqli_query($conn, $query);

if(mysqli_num_rows($resultado) > 0){
    $result = mysqli_query($conn, $query);
    $fila = mysqli_fetch_array($result);
    echo $fila["puntuacion"];

}

?>