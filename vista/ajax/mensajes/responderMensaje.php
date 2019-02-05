<?php
session_start();
require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();
$id = $_GET['id'];

$consulta = "SELECT idEmisor,idReceptor FROM mensajesPrivados WHERE id='$id';";
$result = mysqli_query($conn, $consulta);
while ($fila = mysqli_fetch_array($result)) {
     
    echo $fila['idEmisor'] . "-" . $fila["idReceptor"];

}

?>