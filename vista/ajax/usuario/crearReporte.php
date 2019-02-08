<?php
session_start();
require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();
$nickUsuario = $_GET['nickUsuario'];
$idUsuarioReportado = $_GET['idUsuarioReportado'];
$razon = $_GET['razon'];
$comentario = $_GET['comentario'];

$comentario2 = mysqli_real_escape_string($conn, $comentario);


$query = "INSERT INTO reporte (idReporte, idUsuarioReportado, idUsuarioCreado, razon, comentario, fecha) VALUES (DEFAULT, '$idUsuarioReportado', '$nickUsuario', '$razon', '$comentario2', DEFAULT);";
if(mysqli_query($conn, $query)){ 
    echo "OK";
} else { 
    echo "ERROR"; 
}

?>