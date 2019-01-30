<?php
include('conexion.php');

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT id,nick,mail,pais,idioma,elo,rolPreferido,rolBuscado,region,mensaje FROM usuario WHERE id='$id';");

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>