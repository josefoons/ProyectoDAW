<?php

require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

$id = $_GET['id'];
$consulta = "DELETE FROM mensajesPrivados WHERE id = '$id';";

//mysqli_query($conn, $query)
//$conn->query($consulta) === TRUE
if (mysqli_query($conn, $consulta)) {
    echo "OK"; 
} else {
    echo "ERROR";
}

?>