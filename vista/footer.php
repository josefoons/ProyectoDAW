  <footer id="myFooter">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h2 class="logo"><a href="#"> <img src="vista/img/logo.png" /> </a></h2>
                </div>
                <div class="col-sm-5">
                  <center>
                    <h5>Enlaces Utiles</h5>
                      <ul>
                      <?php
                        if(!empty($_SESSION)){
                            ?>
                                <li><a href="zonaUsuario.php?id=<?php echo $usuario->getId(); ?>">Perfil</a></li>
                                <li><a href="listarMensaje.php?id=<?php echo $usuario->getId(); ?>">Ver Mail</a></li>
                            <?php
                            if($usuario->getRolWeb() == 1){
                                ?>
                                <li><a href="zonaAdmin.php">PANEL ADMINISTRADOR</a></li>
                                <?php
                            }
                        } else {
                            ?>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="registro.php">Registro</a></li>
                                <li><a href="login.php">Login</a></li>
                            <?php
                        }
                      ?>
                      </ul>
                    </center>
                </div>
                <div class="col-sm-3">
                    <div class="social-networks">
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="https://github.com/josefoons/ProyectoDAW" target="_blank" class="github"><i class="fa fa-github-square"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <p>© 2019 Copyright Jose Fons </p>
        </div>
    </footer>
</body>
</html>
