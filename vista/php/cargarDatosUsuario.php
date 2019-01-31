<?php
require_once("conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

$result = mysqli_query($conn, "SELECT nick,pais,idioma,elo,rolPreferido,rolBuscado,region FROM usuario WHERE nick NOT LIKE 'admin';");

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>