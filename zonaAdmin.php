<?php
session_start();
if(!isset($_SESSION)) {
  header("Location: index.php");
} else {
  if($_SESSION['rolWeb'] != 1){
    header('location: index.php');
  }
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
  <link href="css/general.css" rel="stylesheet">

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
        <div class="saludoUsuario">
            <p class="textoSaludoUsuario">Hola, <?php echo $_SESSION['nick']; ?>.</p>
          </div>
        <li class="nav-item">
            <button type="button" id="home_button" class="btn btn-info" onclick="window.location='index.php';">HOME</button>
              <?php
                if(isset($_SESSION)) {          
                  ?>
                    <button type="button" id="panel_button" class="btn btn-info" onclick="window.location='zonaAdmin.php';">PANEL</button>
                    <button type="button" id="usuario_button" class="btn btn-info" onclick="window.location='zonaUsuario.php';">PERFIL</button>
                    <button type="button" id="exit_button" class="btn btn-info" onclick="window.location='logout.php';">SALIR</button>
                  <?php
                }
              ?>
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
            <h1 id="textoImagenPrincipal">Zona Admin</h1>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="container">
    <hr>
    <div class="row">
      <div class="col-lg mb-4"  style="height: 500px;"> <!-- Quitar este style -->
        <div class="card h-100">
          <h4 class="card-header">Controles de Usuario</h4>
          <div class="card-body" id="listaUsuarios">
            <p class="card-text">Usuario</p>
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
</body>

</html>