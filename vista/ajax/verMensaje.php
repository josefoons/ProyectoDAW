<?php

require_once("../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT titulo,mensaje FROM mensajesPrivados WHERE id='$id';");

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>
