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
            console.log(id);
            listarMensajes(mensajes);
        }
    };

    xhttp.open("GET", ip + "listarMensaje.php?id=" + id, true);
    xhttp.send();
}

function listarMensajes(mensajes) {
    let campo = document.getElementById("listaMensajes");
    
    for(var k in mensajes) {
        var idEm = mensajes[k].idEmisor;
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                if(mensajes[k].leido == 1){
                    campo.innerHTML = campo.innerHTML +
                    "<tr>"
                    + "<td class='col-md-2'>" + this.responseText + "</td>"
                    + "<td>" + mensajes[k].titulo + "</td>"
                    + "<td class='col-md-1'>NO</td>"
                    + "<td class='col-md-1'><button type='button' onclick='mostrarMensaje("+ mensajes[k].id +")' class='btn btn-light' data-toggle='modal' data-target='.bd-example-modal-lg'><i class='fa fa-eye' aria-hidden='true'></i></button><td>"
                    + "</tr>";
                } else {
                    campo.innerHTML = campo.innerHTML +
                    "<tr>"
                    + "<td class='col-md-2'>" + this.responseText + "</td>"
                    + "<td>" + mensajes[k].titulo + "</td>"
                    + "<td class='col-md-1'>SI</td>"
                    + "<td class='col-md-1'><button onclick='mostrarMensaje("+ mensajes[k].id +")' type='button' class='btn btn-light' data-toggle='modal' data-target='.bd-example-modal-lg'><i class='fa fa-eye' aria-hidden='true'></i></button><td>"
                    + "</tr>";
                }
            }
        };
    
        xhttp.open("GET", ip + "getNick.php?id=" + idEm, true);
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
        }
    };

    xhttp.open("GET", ip + "verMensaje.php?id=" + idMensaje, true);
    xhttp.send();
}