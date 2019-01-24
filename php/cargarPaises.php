<?php

include("conexion.php");

$consulta = "SELECT * FROM pais;";
$result = mysqli_query($conn, $consulta);
$xmlDevolver = "";

while ($fila = mysqli_fetch_array($result)) {
     
    $codigoPais = $fila["codigoPais"];
    $nombrePais = $fila["nombrePais"];

    $xmlDevolver = $xmlDevolver . "<option id=" . $codigoPais . ">" . $nombrePais . "</option>";

}

echo $xmlDevolver;

?>