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

    xhttp.open("GET", ip + "listarMensaje.php?id=" + id, true);
    xhttp.send();
}

function listarMensajes(mensajes) {
    let campo = document.getElementById("listaMensajes");
    for(var k in mensajes) {
        obtenerNombre(mensajes[k].idEmisor);
        if(mensajes[k].leido == 1){
            campo.innerHTML = campo.innerHTML +
            "<tr>"
            + "<td class='col-md-2'>" + nick + "</td>"
            + "<td>" + mensajes[k].titulo + "</td>"
            + "<td class='col-md-1'>NO</td>"
            + "<td class='col-md-1'><a href='leerMensaje.php?id=" + mensajes[k].id + "'><i class='fa fa-eye' aria-hidden='true'></i></a><td>"
            + "</tr>";
        } else {
            campo.innerHTML = campo.innerHTML +
            "<tr>"
            + "<td class='col-md-2'>" + nick + "</td>"
            + "<td>" + mensajes[k].titulo + "</td>"
            + "<td class='col-md-1'>SI</td>"
            + "<td class='col-md-1'><a href='leerMensaje.php?id=" + mensajes[k].id + "'><i class='fa fa-eye' aria-hidden='true'></i></a><td>"
            + "</tr>";
        }


    }
}

function obtenerNombre(id) {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            nick = this.responseText;
        }
    };

    xhttp.open("GET", ip + "getNick.php?id=" + id, true);
    xhttp.send();
}