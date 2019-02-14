<?php
//session_start();

$errors = array();

require_once "modelo/conexionNEW.php";
require_once "modelo/claseUsuario.php";

$miconexion = new Conexion();
$db = $miconexion->getConexion();


// REGISTER USER
if (isset($_POST['registroButton'])) {

    // LEER DEL FORMULARIO
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

    // ERRORES
    if (empty($nick)) {array_push($errors, "Nick REQUERIDO. ");}
    if (empty($mail)) {array_push($errors, "Correo REQUERIDO. ");}
    if (empty($password)) {array_push($errors, "Contraseña REQUERIDA. ");}
    if (empty($mensaje)) {array_push($errors, "Mensaje REQUERIDO. ");}

    //Comprobar contraseña sigue lo necesario:
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $number    = preg_match('@[0-9]@', $password);
    if(!$uppercase || !$lowercase || !$number || strlen($password) < 8){
        array_push($errors, "Debe contener 8 caracteres, un numero, y al menos una mayuscula y minuscula.");
    }

    // Mirar si no existe el usuario en la base de datos.
    $user_check_query = "SELECT * FROM usuario WHERE nick='$nick' OR mail='$mail' LIMIT 1";
    $result = mysqli_query($db, $user_check_query);
    $user = mysqli_fetch_assoc($result);

    if ($user) { // if user exists
        if ($user['nick'] === $nick) {
            array_push($errors, "Usuario ya existe. ");
        }

        if ($user['mail'] === $mail) {
            array_push($errors, "Correo ya existe. ");
        }
    }

    // Si no hay errores, finalmente metemos el usuario en la db
    if (count($errors) == 0) {
        $pass = md5($password); // encriptamos la contraseña
        $query = "INSERT INTO usuario (id,nick,password,mail,pais,idioma,elo,rolPreferido,rolBuscado,region,mensaje,imgPerfil,rolWeb)
  			  VALUES(DEFAULT,'$nick','$pass','$mail','$pais','$idioma','$elo','$rolPreferido','$rolBuscado','$region','$mensaje','no_pic.jpg',0)";
        mysqli_query($db, $query);

        //CREAMOS LA SESION
        $_SESSION['nick'] = $nick;
        $_SESSION['email'] = $mail;
        $_SESSION['rolWeb'] = 0;
        $_SESSION['estado'] = "OK";

        $query = "SELECT * FROM usuario WHERE mail='$mail' AND password='$pass';";
        $results = mysqli_query($db, $query);
        while ($fila = mysqli_fetch_array($results)) {
            $_SESSION['id'] = $fila["id"];
            $usuarioNuevo = new Usuario($fila["id"], $nick, $mail, $pais, $idioma, $elo, $rolPreferido, $rolBuscado, $region, $mensaje, 0);
            $_SESSION["claseUsuario"] = serialize($usuarioNuevo);
        }

        header('location: index.php');
    }
}

// LOGIN USER
if (isset($_POST['boton-login'])) {
    $emailLogin = mysqli_real_escape_string($db, $_POST['emailLogin']);
    $passLogin = mysqli_real_escape_string($db, $_POST['passLogin']);

    if (empty($emailLogin)) {
        array_push($errors, "Correo REQUERIDO. ");
    }
    if (empty($passLogin)) {
        array_push($errors, "Contraseña REQUERIDA. ");
    }

    //TERMINAR LOGIN
    if (count($errors) == 0) {
        $passwordCrypt = md5($passLogin);
        $query = "SELECT * FROM usuario WHERE mail='$emailLogin' AND password='$passwordCrypt';";
        $results = mysqli_query($db, $query);
        if (mysqli_num_rows($results) == 1) {
            while ($fila = mysqli_fetch_array($results)) {
                $_SESSION['nick'] = $fila["nick"];
                $_SESSION['email'] = $fila["mail"];
                $_SESSION['id'] = $fila["id"];
                $_SESSION['rolWeb'] = $fila["rolWeb"];
                $_SESSION['estado'] = "OK";

                // PRUEBA CLASE

                $pais = mysqli_real_escape_string($db, $_POST['paisRegistro']);
                $idioma = mysqli_real_escape_string($db, $_POST['idiomaRegistro']);
                $elo = mysqli_real_escape_string($db, $_POST['eloRegistro']);
                $rolPreferido = mysqli_real_escape_string($db, $_POST['rolPrefRegistro']);
                $rolBuscado = mysqli_real_escape_string($db, $_POST['rolBuscadoRegistro']);
                $region = mysqli_real_escape_string($db, $_POST['regionRegistro']);
                $mensaje = mysqli_real_escape_string($db, $_POST['mensajeRegistro']);

                $usuarioNuevo = new Usuario($fila["id"], $fila["nick"], $fila["mail"], $fila["pais"], $fila["idioma"], $fila["elo"], $fila["rolPreferido"], $fila["rolBuscado"], $fila["region"], $fila["mensaje"], $fila["rolWeb"]);
                $_SESSION["claseUsuario"] = serialize($usuarioNuevo);
            }

            if($_SESSION['rolWeb'] == 0){
                header('location: zonaUsuario.php');
            } elseif ($_SESSION['rolWeb'] == 1) {
                header('location: zonaAdmin.php');
            }

        } else {
            array_push($errors, "Mala convinacion de correo/contraseña.");
        }
    }
}
