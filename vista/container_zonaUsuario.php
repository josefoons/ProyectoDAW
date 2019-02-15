<div class="container">
        <hr>
        <div class="row">
            <div class="col-lg mb-6">
                <div class="card h-100">
                    <h4 class="card-header">Perfil de <span id="nickPerfilHeader"></span>
                    <?php
                        if(!empty($_SESSION) && $_SESSION['id'] != $_GET['id']){
                        ?>
                            <button style="float:right;" onclick="getNick(<?php echo $usuario->getId(); ?>)" type="button" class="btn btn-danger" data-toggle="modal" data-target="#reporteModal"><i class="fa fa-flag" aria-hidden="true"></i></button>
                        <?php
                        }

                        if(!empty($_SESSION) && $_SESSION['id'] == $_GET['id']){
                            ?>
                            <div class="btn-group" style="float: right;">
                                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-gear"></i></button>
                                <div class="dropdown-menu">
                                    <button id="botonEditarDatos" onclick="abrirCampos()" type="button" class="dropdown-item"><i class="fa fa-user" aria-hidden="true"></i>  CAMBIAR DATOS</button>
                                    <button id="botonEditarPassword" onclick="limpiarCampos()" type="button" class="dropdown-item" data-toggle="modal" data-target="#cambiarPasswordModal"><i class="fa fa-key" aria-hidden="true"></i>  CAMBIAR PASSWORD</button>
                                    <button id="botonSubirImagen" type="button" class="dropdown-item" data-toggle="modal" data-target="#cambioFotoModal"><i class="fa fa-picture-o" aria-hidden="true"></i>  SUBIR FOTO</button>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                    </h4>
                    <div class="card-body" id="panelUsuarioGeneral">
                        <div class="row">
                            <div class="col-sm-4">
                                <!-- ZONA DE LA IMAGEN -->
                                <div id="rango">
                                    <div class="img-thumbnail rounded" id="imagenUsuario">
                                        <img src="vista/img/ranks/unranked.png" id="eloImagenPerfil" />
                                    </div>
                                </div>
                                <div id="botones">
                                    <div id="listadoPaises" class="col-md-4 col-lg-2"></div>
                                    <div id="zonaBotonEliminar"></div>
                                    <?php
                                        if(!empty($_SESSION)){
                                             if($_SESSION['id'] != $_GET['id']){
                                            ?>
                                                <center>
                                                <div id="puntuacion" style="visibility: hidden;">Puntuación concedida: <span id="puntuacionConcedida"></span>.</div>
                                                <div id="outer">
                                                    <div class="inner"><button onclick="crearPuntuacion(this)" value="<?php echo $usuario->getId() ?>" type="button" id="upButton" class="btn btn-success"><i class="fa fa-thumbs-o-up"></i></button></div>
                                                    <div class="inner"><button onclick="crearPuntuacion(this)" value="<?php echo $usuario->getId() ?>" type="button" id="downButton" class="btn btn-danger"><i class="fa fa-thumbs-o-down"></i></button></div>
                                                </div> 
                                                <button id="enviarCorreo" class="btn btn-success" onclick="location.href='enviarMensaje.php?idEmisor=<?php echo $_SESSION['id'] ?>&idReceptor=<?php echo $_GET['id'] ?>'"><i class="fa fa-envelope" aria-hidden="true"></i> ENVIAR MAIL</button>
                                                </center>
                                            <?php
                                            }
                                        }
                                    ?>
                                </div>
                                <!-- /ZONA DE LA IMAGEN -->
                            </div>
                            <div class="col-sm-8">
                                <!-- Zona de los datos -->
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
                                <!-- /Zona de los datos -->
                            </div>
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


<div class="modal fade" id="reporteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reportar a <span id="nickReporte"></span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <p>El abuso del sistema de reportes sera castigado con el borrado de la cuenta. <br>Gracias.</p>
            <hr>
            <div id="notificacionPassword"></div>
            <div class="form-group">
                <label for="oldPassword">ID Usuario</label>
                <?php
                if(!empty($_SESSION)){
                    ?>
                    <input type="text" class="form-control" value="" id="nickUSuarioReportando" disabled>
                    <?php
                }
                ?>
            </div>

            <div class="form-group">
                <label for="razonReporte">Razón</label>
                <select class="form-control" id="razonReporte">
                    <option selected>Selecciona</option>
                    <option value="insultos">Insultos</option>
                    <option value="trollDuoQ">Troll en DuoQ</option>
                    <option value="perfilRobado">Perfil Robado</option>
                    <option value="perfilTroll">Perfil Troll</option>
                </select>
            </div>

            <div class="form-group">
                <label for="comentarioReporte">Comentario</label>
                <textarea class="form-control" id="comentarioReporte" maxlength="120"></textarea>
            </div>
        </div>
      <div class="modal-footer">
        <button type="button" onclick="crearReporte()" class="btn btn-danger">Reportar</button>
      </div>
    </div>
  </div>
</div>


<div class="modal fade" id="cambioFotoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Actualiza tu imagen de perfil (JPG/PNG)</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="vista/php/upload.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="file" name="avatar" id="imagenAvatarSubida" accept="image/png, image/jpeg">
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="ACTUALIZAR" name="submit"></button>
            </div>
        </form>
    </div>
  </div>
</div>