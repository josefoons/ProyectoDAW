<div class="container">
    <hr>
        <div class="row">
            <div class="col-lg mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Formulario de Logueo</h4>
                    <div class="card-body">
                        <div class="md-form mb-5">
                            <form method="post" action="login.php">
                                <?php require_once 'controlador/errors.php';?>
                                <div class="modal-body mx-3">
                                    <div class="md-form mb-5">
                                        <label for="emailLogin">Correo</label>
                                        <input type="email" name="emailLogin" id="emailLogin" class="form-control">
                                        <label for="passLogin">Contraseña</label>
                                        <input type="password" name="passLogin" id="passLogin" class="form-control">
                                        <div class="modal-footer d-flex justify-content-center">
                                            <button class="btn btn-success" name="boton-login" id="boton-login">ADELANTE!</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>