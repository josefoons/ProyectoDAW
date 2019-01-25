<?php

session_start();
$infoUsuario = array("id" => $fila["password"], "nick" => $fila["nick"], "mail" => $fila["mail"], "rolWeb" => $fila["rolWeb"]);
$_SESSION = $infoUsuario;

if($_SESSION["infoUsuario"]['rolWeb'] == 0){
    echo "Hola Usuario";
} elseif ($_SESSION["infoUsuario"]['rolWeb'] == 1) {
    echo " .Hola Admin";
    header('Location: panelAdmin.html');

}



?>