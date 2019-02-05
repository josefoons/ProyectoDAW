<div class="container">
    <hr>
        <div class="row">
            <div class="col-lg mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Lista de mensajes</h4>
                    <div class="card-body">
                        <div id="alertas"></div>
                        <div class="table-responsive">
                            <table class="table table-sm">
                                <thead>
                                    <tr>
                                        <th class="col-md-2">DE</th>
                                        <th>Titulo</th>
                                        <th class="col-md-2">Fecha</th>
                                        <th class="col-md-2">Opciones</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody id="listaMensajes">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


<!-- Large modal -->


<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="tituloMensaje"></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body" id="cuerpoMensaje">
            
        </div>
        <div class="modal-footer">
            <a type="button" href="" id="botonResponder" class="btn btn-primary">Responder</a>
        </div>
      </div>
  </div>
</div>