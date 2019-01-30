<?php
session_start();
require_once("conexionNEW.php");
$miconexion = new Conexion();
if(!isset($_SESSION['nick'])){
    ?>
        <button type="button" id="login" class="btn btn-info" onclick="window.location='login.php';">ENTRAR</button>
        <button type="button" id="registro" class="btn btn-info" onclick="window.location='registro.php';">REGISTRARSE</button>
    <?php
} elseif($_SESSION['nick'] != "") {
    $rolWeb = $miconexion->getRolWeb($_SESSION['nick']);
    ?>
        <div style="color: white; margin-right: 10px; line-height: 25px;"><p style="margin-top: 5px;">Hola, <?php echo $_SESSION['nick']; ?>.</p><div>
        <button type="button" id="home_button" class="btn btn-info" onclick="window.location='index.php';">HOME</button>
        <button type="button" id="usuario_button" class="btn btn-info" onclick="window.location='zonaUsuario.php?id=<?php echo $_SESSION['id'] ?>';">PERFIL</button>
    <?php
        if($rolWeb == 1){
            ?>
                <button type="button" id="panel_button" class="btn btn-info" onclick="window.location='zonaAdmin.php';">PANEL</button>
            <?php
        }
    ?>
        <button type="button" id="salir_boton" class="btn btn-info" onclick="window.location='vista/php/logout.php';">SALIR</button>
    <?php
}
?>