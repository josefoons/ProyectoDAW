<?php
session_start();

// initializing variables
$username = "";
$email = "";
$errors = array();

// connect to the database
// connect to the database
//$servidorDB = "localhost";
//$usuarioDB = "josefons_web";
//$passwordDB = "DawDaw1!";
//$baseDeDatos = "josefons_proyecto";
//$db = mysqli_connect($servidorDB, $usuarioDB, $passwordDB, $baseDeDatos);

include('php/conexion.php');

$db = $conn;

// REGISTER USER
if (isset($_POST['registroButton'])) {

    // receive all input values from the form
    $nick = mysqli_real_escape_string($db, $_POST['nickRegistro']);
    $password = mysqli_real_escape_string($db, $_POST['passRegistro']);
    $mail = mysqli_real_escape_string($db, $_POST['mailRegistro']);
    $pais = mysqli_real_escape_string($db, $_POST['paisRegistro']);
    $idioma = mysqli_real_escape_string($db, $_POST['idiomaRegistro']);
    $elo = mysqli_real_escape_string($db, $_POST['eloRegistro']);
    $rolPreferido = mysqli_real_escape_string($db, $_POST['rolPrefRegistro']);
    $rolBuscado = mysqli_real_escape_string($db, $_POST['rolBuscadoRegistro']);
    $region = mysqli_real_escape_string($db, $_POST['regionRegistro']);
    $mensaje = mysqli_real_escape_string($db, $_POST['mensajeRegistro']);

    // form validation: ensure that the form is correctly filled ...
    // by adding (array_push()) corresponding error unto $errors array
    if (empty($nick)) {array_push($errors, "Username is required");}
    if (empty($mail)) {array_push($errors, "Email is required");}
    if (empty($password)) {array_push($errors, "Password is required");}
    if (empty($mensaje)) {array_push($errors, "Message is required");}

    // first check the database to make sure
    // a user does not already exist with the same username and/or email
    $user_check_query = "SELECT * FROM usuario WHERE nick='$nick' OR mail='$mail' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['nick'] === $nick) {
            array_push($errors, "Username already exists");
        }

        if ($user['mail'] === $mail) {
            array_push($errors, "email already exists");
        }
    }

    // Finally, register user if there are no errors in the form
    if (count($errors) == 0) {
        $pass = md5($password); //encrypt the password before saving in the database

        //INSERT INTO usuario (nick,password,mail,pais,idioma,elo,rolPreferido,rolBuscado,region,mensaje,rolWeb) VALUES ('$nick','$password','$mail','$pais','$idioma','$elo','$rolPreferido','$rolBuscado','$region','$mensaje',0);
        $query = "INSERT INTO usuario (nick,password,mail,pais,idioma,elo,rolPreferido,rolBuscado,region,mensaje,rolWeb)
  			  VALUES('$nick','$pass','$mail','$pais','$idioma','$elo','$rolPreferido','$rolBuscado','$region','$mensaje',0)";
        mysqli_query($db, $query);
        header('location: index.php');

    }
}

// LOGIN USER
if (isset($_POST['boton-login'])) {
    $emailLogin = mysqli_real_escape_string($db, $_POST['emailLogin']);
    $passLogin = mysqli_real_escape_string($db, $_POST['passLogin']);

    if (empty($emailLogin)) {
        array_push($errors, "Email is required");
    }
    if (empty($passLogin)) {
        array_push($errors, "Password is required");
    }
//TERMINAR LOGIN

    if (count($errors) == 0) {
        $passwordCrypt = md5($passLogin);
        $query = "SELECT * FROM usuario WHERE mail='$emailLogin' AND password='$passwordCrypt';";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            while ($fila = mysqli_fetch_array($results)) {
                $_SESSION['nick'] = $fila["nick"];
                $_SESSION['email'] = $fila["email"];
                $_SESSION['id'] = $fila["id"];
                $_SESSION['rolWeb'] = $fila["rolWeb"];
                $_SESSION['estado'] = $fila["rolWeb"];
            }

            if($_SESSION['rolWeb'] == 0){
                header('location: zonaUsuario.php');
            } elseif ($_SESSION['rolWeb'] == 1) {
                header('location: zonaAdmin.php');
            }
            
        } else {
            array_push($errors, "Wrong username/password combination");
        }
    }

}
