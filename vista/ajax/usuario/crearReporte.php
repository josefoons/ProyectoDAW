<?php
session_start();
require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();
$nickUsuario = $_GET['nickUsuario'];
$idUsuarioReportado = $_GET['idUsuarioReportado'];
$razon = $_GET['razon'];


$query = "INSERT INTO reporte (idReporte, idUsuarioReportado, idUsuarioCreado, razon, fecha) VALUES (DEFAULT, '$idUsuarioReportado', '$nickUsuario', '$razon', DEFAULT);";
if(mysqli_query($conn, $query)){ 
    echo "OK";
} else { 
    echo "ERROR"; 
}

?>