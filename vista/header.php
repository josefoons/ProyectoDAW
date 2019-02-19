<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>iDuoQ - Busca DuoQ</title>

  <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="vista/css/custom.css" rel="stylesheet">
<link href="vista/css/footer.css" rel="stylesheet">
<script src="vista/js/ip.js"></script>

<link rel="icon" type="image/svg+xml" href="vista/img/favicon.png" sizes="any">

<?php
    if(limpiar() == "zonaAdmin.php"){
        ?>
        <script src="vista/js/zonaAdmin.js"></script>
        <?php
    }

    if(limpiar() == "listaReportes.php"){
        ?>
        <script src="vista/js/listaReportes.js"></script>
        <?php
    }

    if(limpiar() == "registro.php"){
        ?>
        <script src="vista/js/registro.js"></script>
        <?php
    }

    if(limpiar() == "index.php"){
        ?>
        <script src="vista/js/cargarJugadoresIndex.js"></script>
        <?php
    }

    if(limpiar() == "zonaUsuario.php"){
        ?>
        <link href="vista/css/panelUsuario.css" rel="stylesheet">
        <script src="vista/js/zonaUsuario.js"></script>
        <?php
    }

    if(limpiar() == "enviarMensaje.php"){
        ?>
        <script src="vista/js/enviarMensaje.js"></script>
        <?php
    }

    if(limpiar() == "listarMensaje.php"){
        ?>
        <script src="vista/js/listarMensaje.js"></script>
        <?php
    }

?>

</head>