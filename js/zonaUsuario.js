window.addEventListener("load", cargar, false);
function cargar() {
    obtenerDatos();
}

var link = window.location.href;
var arrayLink = link.split("=");
var id = arrayLink[1];
var ip = "localhost/ProyectoDAW/";
var infoUsuario = "";

function obtenerDatos() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            infoUsuario = JSON.parse(this.responseText);
            colocarDatos();
        }
    };

    xhttp.open("GET", "http://" + ip + "php/cargarInfoUsuario.php?id=" + id, true);
    xhttp.send();
}

function colocarDatos() {
    document.getElementById("rangoImagen").src = "img/ranks/" + infoUsuario[0].elo + ".png";
}

