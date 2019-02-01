<?php

include "php/funcionLimpiar.php";
include "php/conexionNEW.php";

if (limpiar() == "zonaAdmin.php") {
    //session_start();
    if (/* !isset($_SESSION) */ empty($_SESSION)) {
        header("Location: index.php");
    } else {
        $conex = new Conexion();
        $rolWeb = $conex->getRolWeb($_SESSION['nick']);
        if ($rolWeb != 1) {
            header('location: index.php');
        }
    }
}

if (limpiar() == "registro.php" || limpiar() == "login.php") {
    include 'php/server.php';
    if (!isset($_SESSION['nick'])) {
        //
    } elseif ($_SESSION['nick'] != "") {
        header('location: index.php');
    }
}

if (limpiar() == "zonaUsuario.php") {
    if(!isset($_GET['id'])){
        header("Location: index.php");
    }
}

if (limpiar() == "reportar.php") {
    if(!isset($_GET['id'])){
        header("Location: index.php");
    }
}

?>