window.addEventListener("load", cargar, false);
function cargar() {

    document.getElementById("boton-login").addEventListener("click", comprobarCamposLogin);
    document.getElementById("boton-registro").addEventListener("click", comprobarCamposRegistro);
    document.getElementById("registro").addEventListener("click", cargarPaises);
    document.getElementById("registro").addEventListener("click", cargarIdioma);
    document.getElementById("registro").addEventListener("click", cargarRol);
    document.getElementById("registro").addEventListener("click", cargarElo);
    document.getElementById("registro").addEventListener("click", cargarRegion);

}

var ip = "localhost";

function comprobarCamposLogin() {
    var correo = document.getElementById("emailLogin").value;
    var contra = document.getElementById("passLogin").value;

    if(correo != "" && contra != ""){
        login();
    } else {
        alert("Completa todos los campos.");
    }
}   

function comprobarCamposRegistro() {

    var nick = document.getElementById("nickRegistro").value;
    var password = document.getElementById("passRegistro").value;
    var mail = document.getElementById("mailRegistro").value;
    var mensaje = document.getElementById("mensajeRegistro").value;

    if(nick != "" && password != "" && mail != "" && mensaje != ""){
        registro();
    } else {
        alert("Completa todos los campos.");
    }
}

function login() {

    var correo = document.getElementById("emailLogin").value;
    var contra = document.getElementById("passLogin").value;

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };

    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/login.php?correo=" + correo + "&password=" + contra, true);
    xhttp.send();

}

function registro() {


    var nick = document.getElementById("nickRegistro").value;
    var password = document.getElementById("passRegistro").value;
    var mail = document.getElementById("mailRegistro").value;
    var pais = document.getElementById("paisRegistro").value;
    var idioma = document.getElementById("idiomaRegistro").value;
    var elo = document.getElementById("eloRegistro").value;
    var rolPreferido = document.getElementById("rolPrefRegistro").value;
    var rolBuscado = document.getElementById("rolBuscadoRegistro").value;
    var region = document.getElementById("regionRegistro").value;
    var mensaje = document.getElementById("mensajeRegistro").value;


    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };

    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/registro.php?nick=" + nick + "&password=" + password + "&mail=" + mail + "&pais=" + pais + "&idioma=" + idioma + "&elo=" + elo + "&rolPreferido=" + rolPreferido + "&rolBuscado=" + rolBuscado + "&region=" + region + "&mensaje=" + mensaje, true);
    xhttp.send();

}

function cargarRegion() {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var xmlregion = this.responseText;
            document.getElementById("regionRegistro").innerHTML = xmlregion;
        }
    };

    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/cargarRegiones.php", true);
    xhttp.send();

}

function cargarElo() {

    document.getElementById("eloRegistro").innerHTML = "<option selected>Selecciona</option>";
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var xmlElo = this.responseText;
            document.getElementById("eloRegistro").innerHTML = xmlElo;
        }
    };

    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/cargarElo.php", true);
    xhttp.send();

}


function cargarRol() {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var xmlRol = this.responseText;
            document.getElementById("rolPrefRegistro").innerHTML = xmlRol;
            document.getElementById("rolBuscadoRegistro").innerHTML = xmlRol;
        }
    };

    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/cargarRoles.php", true);
    xhttp.send();

}


function cargarPaises() {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var xmlPaises = this.responseText;
            document.getElementById("paisRegistro").innerHTML = xmlPaises;
        }
    };

    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/cargarPaises.php", true);
    xhttp.send();

}

function cargarIdioma() {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var xmlIdioma = this.responseText;
            document.getElementById("idiomaRegistro").innerHTML = xmlIdioma;
        }
    };

    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/cargarIdiomas.php", true);
    xhttp.send();

}
