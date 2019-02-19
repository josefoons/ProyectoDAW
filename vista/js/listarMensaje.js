window.addEventListener("load", cargar, false);
function cargar() {
    cargarMensajesEntrantes();
    document.getElementById("botonCambioMensajes").addEventListener("click", cambiarMensajes);
}

var id = limpiarDireccion();
var nick = "";
var mensajesEntrantes = "";
var mensajesSalientes = "";

function limpiarDireccion() {
    let direccion = window.location.href;
    let todo = direccion.split("?");
    let id = todo[1].split("=");

    return id[1];
}

function cargarMensajesEntrantes() {
    let campo = document.getElementById("listaMensajes");
    campo.innerHTML = "";

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let mensajes = JSON.parse(this.responseText);
            for (var k in mensajes) {
                campo.innerHTML = campo.innerHTML +
                "<tr>"
                + "<td><a href='zonaUsuario.php?id=" + mensajes[k].idEmisor + "'>" + mensajes[k].idEmisor + "</a></td>"
                + "<td>" + mensajes[k].titulo + "</td>"
                + "<td>" + mensajes[k].fecha + "</td>"
                + "<td><button onclick='mostrarMensaje(" + mensajes[k].id + ")' type='button' class='btn btn-light' data-toggle='modal' data-target='.bd-example-modal-lg'><i class='fa fa-eye' aria-hidden='true'></i></button><td>"
                + "</tr>";
            };
        }
    };

    xhttp.open("GET", ip + "mensajes/listarMensaje.php?id=" + id, true);
    xhttp.send();
}


function mostrarMensaje(idMensaje) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let mensaje = JSON.parse(this.responseText);
            document.getElementById("tituloMensaje").innerHTML = mensaje[0].titulo;
            document.getElementById("cuerpoMensaje").innerHTML = mensaje[0].mensaje;
            if (document.getElementById("botonCambioMensajes").value == "salientes") {
                document.getElementById("zonaBotonResponder").innerHTML = "<a type='button' href='' id='botonResponder' class='btn btn-primary'>Responder</a>";
                botonResponder(idMensaje);
            } else {
                document.getElementById("zonaBotonResponder").innerHTML = "";
            }
        }
    };

    xhttp.open("GET", ip + "mensajes/verMensaje.php?id=" + idMensaje, true);
    xhttp.send();
}

function botonResponder(idMensaje) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let respuesta = this.responseText.split("-");
            document.getElementById("botonResponder").href = "enviarMensaje.php?idEmisor=" + respuesta[1] + "&idReceptor=" + respuesta[0];
        }
    };

    xhttp.open("GET", ip + "mensajes/responderMensaje.php?id=" + idMensaje, true);
    xhttp.send();
}

function cambiarMensajes() {
    let boton = this;

    if (boton.value == "salientes") {
        document.getElementById("botonCambioMensajes").innerHTML = "<i class='fa fa-arrow-left'></i>  Ver Entrantes";

        boton.value = "entrantes";
        cargarMensajesSalientes();
    } else {
        document.getElementById("botonCambioMensajes").innerHTML = "<i class='fa fa-arrow-right'></i>  Ver Salientes";
        boton.value = "salientes";
        cargarMensajesEntrantes();
    }
}

function cargarMensajesSalientes() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let mensajes = JSON.parse(this.responseText);
            let campo = document.getElementById("listaMensajes");
            campo.innerHTML = "";

            for (var k in mensajes) {
                campo.innerHTML = campo.innerHTML +
                    "<tr>"
                    + "<td><a href='zonaUsuario.php?id=" + mensajes[k].idReceptor + "'>" + mensajes[k].idReceptor + "</a></td>"
                    + "<td>" + mensajes[k].titulo + "</td>"
                    + "<td>" + mensajes[k].fecha + "</td>"
                    + "<td><button onclick='mostrarMensaje(" + mensajes[k].id + ")' type='button' class='btn btn-light' data-toggle='modal' data-target='.bd-example-modal-lg'><i class='fa fa-eye' aria-hidden='true'></i></button><td>"
                    + "</tr>";
            }
        }
    };

    xhttp.open("GET", ip + "mensajes/listarMensajeSalientes.php?id=" + id, true);
    xhttp.send();
}
