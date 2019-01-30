<header>
    <div>
      <div>
        <div class="bannerPrincipal active" id="imagenBannerPrincipal">
          <div>
          <?php

            if(limpiar() == "index.php"){
               ?>
                <h1 id="textoImagenPrincipal">¿Buscas duo? Esta es tu Web</h1>
               <?php 
            }

            if(limpiar() == "login.php"){
               ?>
                <h1 id="textoImagenPrincipal">Login</h1>
               <?php 
            }

            if(limpiar() == "registro.php"){
               ?>
                <h1 id="textoImagenPrincipal">Registro</h1>
               <?php 
            }

            if(limpiar() == "zonaAdmin.php"){
               ?>
                <h1 id="textoImagenPrincipal">Zona Admin</h1>
               <?php 
            }

            if(limpiar() == "zonaUsuario.php"){
               ?>
                <h1 id="textoImagenPrincipal">Zona Usuario</h1>
               <?php 
            }
          ?>
          </div>
        </div>
      </div>
    </div>
  </header>