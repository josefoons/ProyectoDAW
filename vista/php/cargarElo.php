<?php

require_once("conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

$consulta = "SELECT * FROM elo ORDER BY id;";
$result = mysqli_query($conn, $consulta);
$xmlDevolver = "";

while ($fila = mysqli_fetch_array($result)) {
     
    $codigo = $fila["nombreArchivo"];
    $nombre = $fila["nombre"];

    $xmlDevolver = $xmlDevolver . "<option value=" . $codigo . ">" . $nombre . "</option>";

}

echo $xmlDevolver;


?>