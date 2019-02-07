<div class="container">
        <hr>
        <div class="row">
            <div class="col-lg mb-6">
                <div class="card h-100">
                    <h4 class="card-header">Perfil de <span id="nickPerfilHeader"></span></h4>
                    <div class="card-body" id="panelUsuarioGeneral">
                        <div id="rango">
                            <img id="rangoImagen" src="">
                            <div id="listadoPaises"></div>
                            <div id="zonaBotonEliminar"></div>
                            <?php
                                if(!empty($_SESSION)){
                                    if($_SESSION['id'] == $_GET['id']){
                                        ?>
                                        <center>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gear"></i> OPCIONES</button>
                                            <div class="dropdown-menu">
                                                <button id="botonEditarDatos" onclick="abrirCampos()" type="button" class="dropdown-item"><i class="fa fa-user" aria-hidden="true"></i>  CAMBIAR DATOS</button>
                                                <button id="botonEditarPassword" type="button" class="dropdown-item" data-toggle="modal" data-target="#cambiarPasswordModal"><i class="fa fa-key" aria-hidden="true"></i>  CAMBIAR PASSWORD</button>
                                            </div>
                                        </div>
                                        </center>
                                        <?php
                                    }

                                    if($_SESSION['id'] != $_GET['id']){
                                    ?>  
                                        <center>
                                        <button id="enviarCorreo" class="btn btn-success" onclick="location.href='enviarMensaje.php?idEmisor=<?php echo $_SESSION['id'] ?>&idReceptor=<?php echo $_GET['id'] ?>'"><i class="fa fa-envelope" aria-hidden="true"></i> ENVIAR MAIL</button>
                                        </center>
                                    <?php
                                    }
                                }
                            ?>
                        </div>
                        <div id="linea"></div>
                        <div id="info">
                            <div id="alertaConfirmacion"></div>
                            <form>
                                <div class="form-group row">
                                    <label for="nickPerfil" class="col-sm-2 col-form-label">Nick</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" id="nickPerfil" value="">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="mailPerfil" class="col-sm-2 col-form-label">Correo</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" id="mailPerfil" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="paisPerfil" class="col-sm-2 col-form-label">Pais</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" id="paisPerfil" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="idiomaPerfil" class="col-sm-2 col-form-label">Idioma Usado</label>
                                    <div class="col-sm-10" id="controlIdioma">
                                        <input type="text" readonly class="form-control" id="idiomaPerfil" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="rolPrefePerfil" class="col-sm-2 col-form-label">Rol Preferido</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" id="rolPrefePerfil" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="rolBuscadoPerfil" class="col-sm-2 col-form-label">Rol Buscado</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" id="rolBuscadoPerfil" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="regionPerfil" class="col-sm-2 col-form-label">Region</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" id="regionPerfil" value="">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="mensajePerfil" class="col-sm-2 col-form-label">Mensaje</label>
                                    <div class="col-sm-10">
                                        <input type="text" readonly class="form-control" id="mensajePerfil" maxlength="40" value="">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="modal fade" id="cambiarPasswordModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cambiar contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div id="notificacionPassword"></div>
            <div class="form-group">
                <label for="oldPassword">Actual Contraseña</label>
                <input type="password" class="form-control" id="oldPassword" required>
            </div>

            <div class="form-group">
                <label for="newPassword">Nueva Contraseña</label>
                <input type="password" class="form-control" id="newPassword" required>
            </div>

            <div class="form-group">
                <label for="newPassword_2">Repetir Contraseña</label>
                <input type="password" class="form-control" id="newPassword_2" required>
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" onclick="actualizarPass()" class="btn btn-primary">Guardar</button>
      </div>
    </div>
  </div>
</div>