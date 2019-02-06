<div class="container">
    <hr>
        <div class="row">
            <div class="col-lg mb-4">
                <div class="card h-100">
                    <h4 class="card-header">Enviar mensaje</h4>
                    <div class="card-body">
                    <div id="areaAlerta"></div>
                        <form>
                        <div class="form-group">
                                <label for="emisor">De: </label>
                                <input type="text" class="form-control" id="emisor" readonly>
                            </div>

                            <div class="form-group">
                                <label for="receptor">Para: </label>
                                <input type="text" class="form-control" id="receptor" readonly>
                            </div>

                            <div class="form-group">
                                <label for="titulo">Titulo </label>
                                <input type="text" maxlength="64" class="form-control" id="titulo">
                            </div>

                            <div class="form-group">
                                <label for="mensaje">Mensaje (<span id="letrasTotales">200</span>/200)</label>
                                <textarea maxlength="200" class="form-control" id="mensaje" rows="3"></textarea>
                            </div>

                            <button type="button" id="enviarMensaje" style="float: right;"class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

