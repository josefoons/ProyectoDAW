<div class="container">
        <hr>
        <div class="row">
            <div class="col-lg mb-4" style="height: 750px;">
                <div class="card h-100">
                    <h4 class="card-header">Lista de Reportes</h4>
                    <div class="card-body" style="overflow: auto;">
                    <div id="espacioAlertas"></div>
                        <div class="table-responsive">
                            <table  class="table table-hover table-fixed">
                                <thead>
                                    <tr>
                                        <th>Usuario Reportado</th>
                                        <th>Usuario Creado</th>
                                        <th>Razon</th>
                                        <th>Comentario</th>
                                        <th>Fecha</th>
                                        <th>Opciones</th>
                                    </tr>
                                </thead>
                                <tbody id="listaReportes">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="modal fade" id="comentarioModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Comentario</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <div class="modal-body">
            <div id="contanidoComentarioReporte"></div>
        </div>
    </div>
  </div>
</div>