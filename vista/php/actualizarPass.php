<?php
session_start();
require_once("conexionNEW.php");
$miconexion = new Conexion();
$conn = $miconexion->getConexion();
//actualizarPass.php?id=10&antigua=Straxy111&nueva=patata&nueva_other=patata
$id = $_GET['id'];
$antigua = $_GET['antigua'];
$nueva = $_GET['nueva'];
$nueva2 = $_GET['nueva_other'];

$antiguaCrypt = md5($antigua);
$nuevaCrypt = md5($nueva);
$nueva2Crypt = md5($nueva2);

if($nuevaCrypt == $nueva2Crypt){
    $consulta = "SELECT password FROM usuario WHERE id='$id' AND '$antiguaCrypt';";
    $result = mysqli_query($conn, $consulta);
    if(mysql_num_rows($result) > 0) { //AUNQUE ESTO SIEMPRE DEBERIA SER 1, pero WHATEVER
        $query = "UPDATE usuario SET password = '$nuevaCrypt' WHERE id='$id';";
        if(mysqli_query($conn, $query)){ 
            echo "OK";
        } else { 
            echo "ERROR-ACTUALIZAR"; 
        }
    } else {
        echo "NO-IGUAL-ANTIGUA"; //NUNCA DEBERIA ESTAR AQUI XD
    }
} else {
    echo "NO-IGUALES"; 
} 








?>