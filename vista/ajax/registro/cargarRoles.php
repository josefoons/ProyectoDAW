<?php

require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

$consulta = "SELECT * FROM rol ORDER BY id;";
$result = mysqli_query($conn, $consulta);
$xmlDevolver = "";

while ($fila = mysqli_fetch_array($result)) {
     
    $codigo = $fila["codigoRol"];
    $nombre = $fila["rolNombre"];

    $xmlDevolver = $xmlDevolver . "<option value=" . $codigo . ">" . $nombre . "</option>";

}

echo $xmlDevolver;

?>