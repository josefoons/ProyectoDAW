<?php

require_once("conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

$consulta = "SELECT * FROM pais ORDER BY id;";
$result = mysqli_query($conn, $consulta);
$xmlDevolver = "";

while ($fila = mysqli_fetch_array($result)) {
     
    $codigoPais = $fila["codigoPais"];
    $nombrePais = $fila["nombrePais"];

    $xmlDevolver = $xmlDevolver . "<option value=" . $codigoPais . ">" . $nombrePais . "</option>";

}

echo $xmlDevolver;

?>