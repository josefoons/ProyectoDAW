<?php

include("conexion.php");

$consulta = "SELECT * FROM rol;";
$result = mysqli_query($conn, $consulta);
$xmlDevolver = "";

while ($fila = mysqli_fetch_array($result)) {
     
    $codigo = $fila["codigoRol"];
    $nombre = $fila["rolNombre"];

    $xmlDevolver = $xmlDevolver . "<option value=" . $codigo . ">" . $nombre . "</option>";

}

echo $xmlDevolver;

?>