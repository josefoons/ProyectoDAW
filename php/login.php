<?php

include("conexion.php");

$correo = $_GET['correo'];
$password = $_GET['password'];
$consulta = "SELECT mail,password FROM usuario WHERE mail='$correo';";
$result = mysqli_query($conn, $consulta);
$tamanyo = $result->num_rows;

if($tamanyo > 0){
    while ($fila = mysqli_fetch_array($result)) {
     
        if ($fila["password"] === md5($password) && $fila["mail"] === $correo) {
            echo "Bienvenido";
        }
       
        if ($fila["password"] != md5($password)){
            echo '<p>'. "Contraseña mal introducida." .'</p>';
        }
       
        if ($fila["mail"] != $correo){
            echo '<p>'. "Correo mal introducido." .'</p>';
        }
   
    }
} else {
    echo "Usuario no existe.";
}
   
mysqli_close($conn);
                            
?>
