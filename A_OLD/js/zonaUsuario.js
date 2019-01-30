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

    console.log(infoUsuario[0]);
    document.getElementById("rangoImagen").src = "img/ranks/" + infoUsuario[0].elo + ".png";
    document.getElementById("nickPerfil").value = infoUsuario[0].nick;
    document.getElementById("mailPerfil").value = infoUsuario[0].mail;
    document.getElementById("paisPerfil").value = infoUsuario[0].pais;
    document.getElementById("idiomaPerfil").value = infoUsuario[0].idioma;
    document.getElementById("rolPrefePerfil").value = infoUsuario[0].rolPreferido;
    document.getElementById("rolBuscadoPerfil").value = infoUsuario[0].rolBuscado;
    document.getElementById("regionPerfil").value = infoUsuario[0].region;
    document.getElementById("mensajePerfil").value = infoUsuario[0].mensaje;
}

