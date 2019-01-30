<?php
    $servidor = "localhost";
    $username = "daw";
    $password = "daw";
    $basedatos = "proyectoDAW";

    $conn = mysqli_connect($servidor, $username, $password, $basedatos);

    if (!$conn) {
        //die("Conexi&ocacuten fallida: " . mysqli_connect_error());
        echo "NoDB";
    }
?>