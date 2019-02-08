<?php

require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

$id = $_GET['idReporte'];
$consulta = "DELETE FROM reporte WHERE idReporte = '$id';";

if ($conn->query($consulta) === TRUE) {
    echo "OK"; 
} else {
    echo "ERROR";
}

?>