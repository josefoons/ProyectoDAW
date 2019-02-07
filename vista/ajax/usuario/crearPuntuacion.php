<?php
session_start();
require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();
$idPerfil = $_GET['idPerfil'];
$idUsuario = $_GET['idSesion'];
$puntuacion = $_GET['nota'];

$query = "INSERT INTO puntuacion (idPuntuacion, idPerfil, idUsuario, puntuacion) VALUES (DEFAULT, '$idPerfil', '$idUsuario', '$puntuacion')";

if ($conn->query($query) === TRUE) {
    echo "OK";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

?>