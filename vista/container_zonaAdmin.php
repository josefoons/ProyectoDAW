    <div class="container">
        <hr>
        <div class="row">
          <div class="col-lg mb-4"  style="height: 500px;"> 
            <div class="card h-100">
              <h4 class="card-header">Panel control de <?php echo strtoupper ($_SESSION['nick']) ?></h4>
              <div class="card-body" id="zonaAdmin">
                <div class="input-group">
                  <input type="text" class="form-control" id="inputNombreUsuarios" placeholder="Buscar Usuario">
                  <span class="input-group-btn">
                    <button type="button" id="lupaBuscar" class="btn btn-info"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </span>
                </div>
                <hr>
                <div class="container">
                  <div class="row">
                    <div class="col">
                      ID
                    </div>
                    <div class="col">
                      Nick
                    </div>
                    <div class="col">
                      Mail
                    </div>
                    <div class="col">
                      Comentario
                    </div>
                    <div class="col">
                      Opciones
                    </div>
                  </div>
                </div>
                <hr>
                <div id="colocarUsuario"></div>
              </div>
            </div>
          </div>
        </div>