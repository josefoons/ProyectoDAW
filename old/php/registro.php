<?php
include "conexion.php";

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

$consulta = "INSERT INTO usuario (nick,password,mail,pais,idioma,elo,rolPreferido,rolBuscado,region,mensaje,rolWeb) VALUES ('$nick','$password','$mail','$pais','$idioma','$elo','$rolPreferido','$rolBuscado','$region','$mensaje',0);";
$result = mysqli_query($conn, $consulta);

if ($result) {
    echo "Success";

} else {
    echo "Error";

}

mysqli_close($conn);

