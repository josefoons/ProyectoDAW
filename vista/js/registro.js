window.addEventListener("load", cargar, false);
function cargar() {
    cargarElo();
    cargarIdioma();
    cargarPaises();
    cargarRegion();
    cargarRol();
}


  
function cargarRegion() {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var xmlregion = this.responseText;
            document.getElementById("regionRegistro").innerHTML = xmlregion;
        }
    };

    xhttp.open("GET",  ip + "registro/cargarRegiones.php", true);
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

    xhttp.open("GET",  ip + "registro/cargarElo.php", true);
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

    xhttp.open("GET",  ip + "registro/cargarRoles.php", true);
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

    xhttp.open("GET",  ip + "registro/cargarPaises.php", true);
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

    xhttp.open("GET",  ip + "registro/cargarIdiomas.php", true);
    xhttp.send();

}
