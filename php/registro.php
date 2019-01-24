<?php
    include("conexion.php");
    
    /* nick password mail pais idioma elo rolPreferido rolBuscado region mensaje */
    
    $nick = $_GET['nick'];
    $password = md5($_GET['password']);
    $mail = $_GET['mail'];
    $pais = $_GET['pais'];
    $idioma = $_GET['idioma'];
    $elo = $_GET['elo'];
    $rolPreferido = $_GET['rolPreferido'];
    $rolBuscado = $_GET['rolBuscado'];
    $region = $_GET['region'];
    $mensaje = $_GET['mensaje'];

           
    $consulta = "INSERT INTO usuario VALUES ('$nick','$password','$mail','$pais','$idioma','$elo','$rolPreferido','$rolBuscado','$region','$mensaje');";
    $result = mysqli_query($conn, $consulta);
               
    mysqli_close($conn);
   
    echo "Registrado Correctamente.";
                                
?>