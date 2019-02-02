<?php

require_once("../php/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

$id = $_GET['dato'];
echo $id;
$consulta = "DELETE FROM usuario WHERE id = '$id';";

if ($conn->query($consulta) === TRUE) {
    echo "OK"; 
} else {
    echo "ERROR";
}

?>