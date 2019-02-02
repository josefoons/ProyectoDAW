<?php
session_start();
require_once("../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();
//actualizarPass.php?id=10&antigua=Straxy111&nueva=patata&nueva_other=patata
$id = $_GET['id'];
$nueva = $_GET['nueva'];

$nuevaCrypt = md5($nueva);

$consulta = "SELECT password FROM usuario WHERE id='$id';";
$result = mysqli_query($conn, $consulta);
$row_cnt = $result->num_rows;
if($row_cnt > 0) { //AUNQUE ESTO SIEMPRE DEBERIA SER 1, pero WHATEVER
    $query = "UPDATE usuario SET password = '$nuevaCrypt' WHERE id='$id';";
    if(mysqli_query($conn, $query)){ 
        echo "OK";
    } else { 
        echo "ERROR-ACTUALIZAR"; 
    }
} else {
    echo "ERROR-ACTUALIZAR"; //NUNCA DEBERIA ESTAR AQUI XD
}

?>