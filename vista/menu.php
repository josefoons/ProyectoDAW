<?php
//session_start();
require_once("modelo/conexionNEW.php");
require_once("modelo/claseUsuario.php");
$miconexion = new Conexion();

if(empty($_SESSION)){
    ?>
        <button type="button" id="login" class="btn btn-info" onclick="window.location='login.php';">ENTRAR</button>
        <button type="button" id="registro" class="btn btn-info" onclick="window.location='registro.php';">REGISTRARSE</button>
    <?php
} else/*if( $_SESSION['nick'] != ""  )*/ {
    $usuario = unserialize($_SESSION['claseUsuario']);
    $rolWeb = $miconexion->getRolWeb($usuario->getNick());
    ?>
        <div style="color: white; margin-right: 10px; line-height: 25px;"><p style="margin-top: 5px;">Hola, <?php echo /* $_SESSION['nick'] */ $usuario->getNick(); ?>.</p><div>
        <button type="button" id="home_button" class="btn btn-info" onclick="window.location='index.php';">HOME</button>
        <button type="button" id="usuario_button" class="btn btn-info" onclick="window.location='zonaUsuario.php?id=<?php echo $usuario->getId() ?>';">PERFIL</button>
    <?php
        if($rolWeb == 1){
            ?>
                <!-- <button type="button" id="panel_button" class="btn btn-info" onclick="window.location='zonaAdmin.php';">PANEL</button> -->
                <div class="btn-group">
                    <button type="button" id="panel_button" class="btn btn-info" onclick="window.location='zonaAdmin.php';">PANEL</button>
                    <button type="button" class="btn btn-info dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="noticias.php">Noticias</a>
                    </div>
                </div>
            <?php
        }
    ?>
        <button type="button" id="salir_boton" class="btn btn-info" onclick="window.location='controlador/logout.php';">SALIR</button>
    <?php
}
?>