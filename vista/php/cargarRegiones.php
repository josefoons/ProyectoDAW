<?php

require_once("conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

$consulta = "SELECT * FROM region ORDER BY id;";
$result = mysqli_query($conn, $consulta);
$xmlDevolver = "";

while ($fila = mysqli_fetch_array($result)) {
     
    $codigo = $fila["codigoRegion"];
    $nombre = $fila["nombreRegion"];

    $xmlDevolver = $xmlDevolver . "<option value=" . $codigo . ">" . $nombre . "</option>";

}

echo $xmlDevolver;

?>