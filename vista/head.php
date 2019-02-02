<?php

include "php/funcionLimpiar.php";
include "modelo/conexionNEW.php";
require_once "modelo/claseUsuario.php";

if (limpiar() == "zonaAdmin.php") {
    if (empty($_SESSION)) {
        header("Location: index.php");
    } else {
        $conex = new Conexion();
        //$rolWeb = $conex->getRolWeb($_SESSION['nick']);
        $usuario = unserialize($_SESSION['claseUsuario']);
        $rolWeb = $conex->getRolWeb($usuario->getNick());
        if ($rolWeb != 1) {
            header('location: index.php');
        }
    }
}

if (limpiar() == "registro.php" || limpiar() == "login.php") {
    include 'controlador/server.php';
    if (!empty($_SESSION)) {
        header('location: index.php');
    }
}

if (limpiar() == "zonaUsuario.php") {
    if(!empty($_SESSION)){
        header("Location: index.php");
    }
}

?>