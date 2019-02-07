<?php
session_start();
require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();
$idPerfil = $_GET['idPerfil'];
$idUsuario = $_GET['idSesion'];

$query = "SELECT * FROM puntuacion WHERE idPerfil='$idPerfil' AND idUsuario='$idUsuario'";

if(mysqli_num_rows($query) > 0){
    echo "0";
} else {
    $result = mysqli_query($conn, $query);
    while ($fila = mysqli_fetch_array($result)) {
     
        echo $fila["puntuacion"];
    
    }
}

?>