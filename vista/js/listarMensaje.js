window.addEventListener("load", cargar, false);
function cargar() {
    cargarMensajes();
}

var id = limpiarDireccion();
var nick = "";

function limpiarDireccion() {
    let direccion = window.location.href;
    let todo = direccion.split("?");
    let id = todo[1].split("=");

    return id[1];
}

function cargarMensajes() {
    
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let mensajes = JSON.parse(this.responseText);
            listarMensajes(mensajes);
        }
    };

    xhttp.open("GET", ip + "mensajes/listarMensaje.php?id=" + id, true);
    xhttp.send();
}

function listarMensajes(mensajes) {
    let campo = document.getElementById("listaMensajes");
    
    for(var k in mensajes) {
        var idEm = mensajes[k].idEmisor;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                campo.innerHTML = campo.innerHTML +
                "<tr>"
                + "<td>" + this.responseText + "</td>"
                + "<td>" + mensajes[k].titulo + "</td>"
                + "<td>" + mensajes[k].fecha + "</td>"
                + "<td><button onclick='mostrarMensaje("+ mensajes[k].id +")' type='button' class='btn btn-light' data-toggle='modal' data-target='.bd-example-modal-lg'><i class='fa fa-eye' aria-hidden='true'></i></button>     <button onclick='borrarMensaje(" + mensajes[k].id + ")' type='button' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></button><td>"
                + "</tr>";
            }
        };
    
        xhttp.open("GET", ip + "mensajes/getNick.php?id=" + idEm, true);
        xhttp.send();
    }
}

function mostrarMensaje(idMensaje) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let mensaje = JSON.parse(this.responseText);
            document.getElementById("tituloMensaje").innerHTML = mensaje[0].titulo;
            document.getElementById("cuerpoMensaje").innerHTML = mensaje[0].mensaje;
            botonResponder(idMensaje);
        }
    };

    xhttp.open("GET", ip + "mensajes/verMensaje.php?id=" + idMensaje, true);
    xhttp.send();
}

function borrarMensaje(boton) {
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            location.reload(); 
        }
    };

    xhttp.open("GET", ip + "mensajes/borrarMensaje.php?id=" + boton, true);
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