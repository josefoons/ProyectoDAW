<?php
require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

$result = mysqli_query($conn, "SELECT id,nick,pais,idioma,elo,rolPreferido,rolBuscado,region,rolWeb FROM usuario WHERE rolWeb=0;");

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>