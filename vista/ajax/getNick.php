<?php

require_once("../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

$id = $_GET['id'];

$consulta = "SELECT nick FROM usuario WHERE id='$id';";
$result = mysqli_query($conn, $consulta);

while ($fila = mysqli_fetch_array($result)) {
     
    echo $fila['nick'];

}



?>