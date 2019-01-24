<?php

include("conexion.php");

$consulta = "SELECT * FROM elo;";
$result = mysqli_query($conn, $consulta);
$xmlDevolver = "";

while ($fila = mysqli_fetch_array($result)) {
     
    $codigo = $fila["nombreArchivo"];
    $nombre = $fila["nombre"];

    $xmlDevolver = $xmlDevolver . "<option id=" . $codigo . ">" . $nombre . "</option>";

}

echo $xmlDevolver;

?>