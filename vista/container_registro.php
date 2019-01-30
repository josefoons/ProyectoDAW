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
                                <input type="text" size="20" id="nickRegistro" name="nickRegistro" class="form-control"
                                    required>

                                <label for="passRegistro">Contraseña</label>
                                <input type="password" id="passRegistro" name="passRegistro" class="form-control"
                                    required>

                                <label for="mailRegistro">Correo</label>
                                <input type="email" size="100" id="mailRegistro" name="mailRegistro" class="form-control"
                                    required>

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
                                <textarea size="100" id="mensajeRegistro" class="form-control" maxlength="300" name="mensajeRegistro"
                                    required></textarea>

                                <div class="modal-footer d-flex justify-content-center">
                                    <button class="btn btn-success" type="submit" name="registroButton" id="boton-registro">ADELANTE!</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>