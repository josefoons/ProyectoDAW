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

//isset($_GET["id"])

if (limpiar() == "registro.php" || limpiar() == "login.php") {
    include 'controlador/server.php';
    if (!empty($_SESSION)) {
        header('location: index.php');
    }
}

if (limpiar() == "zonaUsuario.php") {
    if(!isset($_GET["id"]) || $_GET['id'] == ""){
        header("Location: index.php");
    }
}

if (limpiar() == "enviarMensaje.php") {
    if(empty($_SESSION) && !isset($_GET["idEmisor"]) || $_GET['idEmisor'] == "" || !isset($_GET["idReceptor"]) || $_GET['idReceptor'] == ""){
        header("Location: index.php");
    }
}

if (limpiar() == "listarMensaje.php") {
    if(empty($_SESSION) || !isset($_GET["id"]) || $_GET['id'] == ""){
        header("Location: index.php");
    }
} 

if (limpiar() == "listaReportes.php") {
    if (empty($_SESSION)) {
        header("Location: index.php");
    } else {
        $conex = new Conexion();
        $usuario = unserialize($_SESSION['claseUsuario']);
        $rolWeb = $conex->getRolWeb($usuario->getNick());
        if ($rolWeb != 1) {
            header('location: index.php');
        }
    }
}

?>