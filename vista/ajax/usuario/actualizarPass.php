<?php
session_start();
require_once("../../../modelo/conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();
$id = $_GET['id'];
$nueva = $_GET['nueva'];
$old = $_GET['old'];
$correo = $_SESSION['email'];

$uppercase = preg_match('@[A-Z]@', $nueva);
$lowercase = preg_match('@[a-z]@', $nueva);
$number    = preg_match('@[0-9]@', $nueva);
if(!$uppercase || !$lowercase || !$number || strlen($nueva) < 8){
    echo "NO-CUMPLE";
} else {
    $nuevaCrypt = md5($nueva);
    $oldCrypt = md5($old);

    $consulta = "SELECT password FROM usuario WHERE id='$id' AND mail='$correo';";
    $result = mysqli_query($conn, $consulta);
    $row_cnt = $result->num_rows;
    if(mysqli_num_rows($result) == 1) { //AUNQUE ESTO SIEMPRE DEBERIA SER 1, pero WHATEVER
        while ($fila = mysqli_fetch_array($result)) {
            if($fila['password'] == $oldCrypt){
                $query = "UPDATE usuario SET password = '$nuevaCrypt' WHERE id='$id';";
                if(mysqli_query($conn, $query)){ 
                    echo "OK";
                } else { 
                    echo "ERROR-ACTUALIZAR"; //NUNCA DEBERIA ESTAR AQUI 
                }
            } else {
                echo "DIREFENTE-ANTIGUA";
            }
        }
    } else {
        echo "ERROR-ACTUALIZAR"; //NUNCA DEBERIA ESTAR AQUI 
    }
}



?>