<?php include 'php/server.php';
if(!isset($_SESSION['nick'])){
    //REGISTRO LIBRE
} elseif($_SESSION['nick'] != "") {
  header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Fons</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
    crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
    crossorigin="anonymous"></script>


  <!-- Custom styles for this template -->
  <link href="css/custom.css" rel="stylesheet">
  <script src="js/registro.js"></script>

</head>

<body>
  <nav class="navbar  navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php"><img id="logo" src="img/logo.png" /></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive"
        aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <button type="button" id="login" class="btn btn-info" onclick="window.location='login.php';">ENTRAR</button>
            <button type="button" id="registro" class="btn btn-info" onclick="window.location='registro.php';">REGISTRARSE</button>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <header>
    <div>
      <div>
        <div class="bannerPrincipal active" id="imagenBannerPrincipal">
          <div>
            <h1 id="textoImagenPrincipal">Registro</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <hr>
    <div class="row">
      <div class="col-lg mb-4">
        <div class="card h-100">
          <h4 class="card-header">Formulario de Registro</h4>
          <div class="card-body">
            <div class="md-form mb-5">
              <form method="post" action="registro.php">
                <?php include 'php/errors.php';?>
                <label for="nickRegistro">Nick</label>
                <input type="text" size="20" id="nickRegistro" name="nickRegistro" class="form-control" required>

                <label for="passRegistro">Contraseña</label>
                <input type="password" id="passRegistro" name="passRegistro" class="form-control" required>

                <label for="mailRegistro">Correo</label>
                <input type="email" size="100" id="mailRegistro" name="mailRegistro" class="form-control" required>

                <label for="paisRegistro">Pais</label>
                <select class="form-control" id="paisRegistro" name="paisRegistro" required>
                  <!-- GENERAR INFO DE DB -->
                </select>

                <label for="idiomaRegistro">Idioma Preferido</label>
                <select class="form-control" id="idiomaRegistro" name="idiomaRegistro" required>
                  <!-- GENERAR INFO DE DB -->
                </select>

                <label for="eloRegistro">Elo</label>
                <select id="eloRegistro" class="form-control" name="eloRegistro" required>
                  <!-- GENERAR INFO DE DB -->
                </select>


                <label for="rolPrefRegistro">Rol Preferido</label>
                <select id="rolPrefRegistro" class="form-control" name="rolPrefRegistro" required>
                  <!-- GENERAR INFO DE DB -->
                </select>

                <label for="rolBuscadoRegistro">Rol Buscado</label>
                <select id="rolBuscadoRegistro" class="form-control" name="rolBuscadoRegistro" required>
                  <!-- GENERAR INFO DE DB -->
                </select>

                <label for="regionRegistro">Region</label>
                <select id="regionRegistro" class="form-control" name="regionRegistro" required>
                  <!-- GENERAR INFO DE DB -->
                </select>

                <label for="mensajeRegistro">Mensaje</label>
                <textarea size="100" id="mensajeRegistro" class="form-control" maxlength="300" name="mensajeRegistro" required></textarea>

                <div class="modal-footer d-flex justify-content-center">
                  <button class="btn btn-success" type="submit" name="registroButton" id="boton-registro">ADELANTE!</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr>
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Siguenos en Twitter</h5>
            <p class="card-text">Enterate de Sorteos</p>
            <a href="#" class="btn btn-primary">TWITTER</a>
          </div>
        </div>
      </div>
      <div class="col-sm-6" id="contenedorBanner">
        <img src="img/banner_inferior.jpg" id="bannerHeimer">
      </div>
    </div>
    <hr>
  </div>

  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Jose Fons</p>
    </div>
  </footer>
  </div>

</body>

</html>
