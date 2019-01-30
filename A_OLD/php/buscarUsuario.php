<?php
include('conexion.php');
$trozo = $_GET['nombre'];
$result = mysqli_query($conn, "SELECT id,nick,mail,mensaje,rolWeb FROM usuario WHERE nick LIKE '$trozo%'");

$data = array();

while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

echo json_encode($data);
?>