<?php

include("conexion.php");

$correo = $_GET['correo'];
$password = $_GET['password'];
$consulta = "SELECT * FROM usuario WHERE mail='$correo';";
$result = mysqli_query($conn, $consulta);
$tamanyo = $result->num_rows;

if($tamanyo > 0){
    while ($fila = mysqli_fetch_array($result)) {
     
        if ($fila["password"] === md5($password) && $fila["mail"] === $correo) {
            echo "Bienvenido";
            include("crearSesion.php");
        }
       
        if ($fila["password"] != md5($password)){
            echo "Contraseña mal introducida";
        }
       
        if ($fila["mail"] != $correo){
            echo "Correo mal introducido.";
        }
   
    }
} else {
    echo "Usuario no existe.";
}

 
mysqli_close($conn);
                            
?>
