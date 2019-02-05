<?php

require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

$id = $_GET['id'];
echo $id;
$consulta = "DELETE FROM mensajesPrivados WHERE id = '$id';";

if ($conn->query($consulta) === TRUE) {
    echo "OK"; 
} else {
    echo "ERROR";
}

?>