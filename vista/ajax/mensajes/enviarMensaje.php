<?php
session_start();
require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();
$mensaje = $_GET['mensaje'];
$emisor = $_GET['emisor'];
$receptor = $_GET['receptor'];
$titulo = $_GET['titulo'];

//IMPORTANTE PARA FILTRAR ESPACIOS Y CARACTERES RAROS
$mensaje2 = mysqli_real_escape_string($conn, $mensaje);
$titulo2 = mysqli_real_escape_string($conn, $titulo);

$query = "INSERT INTO mensajesPrivados (id, idEmisor, idReceptor, titulo, mensaje, fecha) VALUES (DEFAULT, '$emisor', '$receptor', '$titulo2', '$mensaje2', DEFAULT)";
if(mysqli_query($conn, $query)){ 
    echo "OK";
} else { 
    echo "ERROR"; 
}


?>