<?php
if(!isset($_SESSION['nick'])){
    ?>
        <button type="button" id="login" class="btn btn-info" onclick="window.location='login.php';">ENTRAR</button>
        <button type="button" id="registro" class="btn btn-info" onclick="window.location='registro.php';">REGISTRARSE</button>
    <?php
} elseif($_SESSION['nick'] != "") {
    ?>
        <p class="textoSaludoUsuario">Hola, <?php echo $_SESSION['nick']; ?>.</p>
        <button type="button" id="home_button" class="btn btn-info" onclick="window.location='index.php';">HOME</button>
        <button type="button" id="usuario_button" class="btn btn-info" onclick="window.location='zonaUsuario.php';">PERFIL</button>
    <?php
        if($_SESSION['rolWeb'] == 1){
            ?>
                <button type="button" id="panel_button" class="btn btn-info" onclick="window.location='zonaAdmin.php';">PANEL</button>
            <?php
        }
    ?>
        <button type="button" id="salir_boton" class="btn btn-info" onclick="window.location='php/logout.php';">SALIR</button>
    <?php
}
?>