<?php
session_start();
require_once "../../modelo/claseUsuario.php";
require_once "../../modelo/conexionNEW.php";
$usuario = unserialize($_SESSION['claseUsuario']);
$miconexion = new Conexion();
$conn = $miconexion->getConexion();

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if file was uploaded without errors
    if (isset($_FILES["avatar"]) && $_FILES["avatar"]["error"] == 0) {
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "png" => "image/png");
        $filename = $_FILES["avatar"]["name"];
        $filetype = $_FILES["avatar"]["type"];
        $filesize = $_FILES["avatar"]["size"];

        $fija = explode(".", $filename);
        $extension = $fija[1];

        // Verify file extension
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if (!array_key_exists($ext, $allowed)) {
            die("Error: Please select a valid file format.");
        }

        // Verify file size - 5MB maximum
        $maxsize = 5 * 1024 * 1024;
        if ($filesize > $maxsize) {
            die("Error: File size is larger than the allowed limit.");
        }

        // Verify MYME type of the file
        if (in_array($filetype, $allowed)) {

            if($extension == "jpeg"){
                $extension = "jpg";
            }

            $nombreFinal = $usuario->getId() . "_imgPerfil." . $extension;
            $moved = move_uploaded_file($_FILES["avatar"]["tmp_name"], "../img/imgUsuarios/" . $nombreFinal);
            if ($moved) {
                $idUsuario = $usuario->getId();
                //ACTUALIZAR
                $query = "UPDATE usuario SET imgPerfil = '$nombreFinal' WHERE id='$idUsuario';";
                mysqli_query($conn, $query);
                header("Location: ./../../zonaUsuario.php?id=" . $idUsuario);
            } else {
                //echo "Not uploaded because of error #" . $_FILES["avatar"]["error"];
            }
        } else {
            //echo "Error: There was a problem uploading your file. Please try again.";
        }
    } else {
        //echo "Error: " . $_FILES["avatar"]["error"];
    }
}

?>