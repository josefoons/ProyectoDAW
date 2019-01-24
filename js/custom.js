window.addEventListener("load", cargar, false);
function cargar(){

    document.getElementById("boton-login").addEventListener("click", login);
    document.getElementById("registro").addEventListener("click", cargarPaises);
    document.getElementById("registro").addEventListener("click", cargarIdioma);
    document.getElementById("registro").addEventListener("click", cargarRol);
    document.getElementById("registro").addEventListener("click", cargarElo);
    document.getElementById("registro").addEventListener("click", cargarRegion);
    
}

var ip = "localhost";

function cargarRegion() {
    
    document.getElementById("regionRegistro").innerHTML = "<option selected>Selecciona</option>";
    var xhttp = new XMLHttpRequest();
   
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xmlElo = this.responseText;
            document.getElementById("regionRegistro").innerHTML = document.getElementById("regionRegistro").innerHTML + xmlElo;
        }
    };
   
    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/cargarRegiones.php", true);
    xhttp.send();

}

function cargarElo() {
    
    document.getElementById("eloRegistro").innerHTML = "<option selected>Selecciona</option>";
    var xhttp = new XMLHttpRequest();
   
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xmlElo = this.responseText;
            document.getElementById("eloRegistro").innerHTML = document.getElementById("eloRegistro").innerHTML + xmlElo;
        }
    };
   
    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/cargarElo.php", true);
    xhttp.send();

}


function cargarRol() {
    
    document.getElementById("rolPrefRegistro").innerHTML = "<option selected>Selecciona</option>";
    document.getElementById("rolBuscadoRegistro").innerHTML = "<option selected>Selecciona</option>";
    var xhttp = new XMLHttpRequest();
   
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xmlRol = this.responseText;
            document.getElementById("rolPrefRegistro").innerHTML = document.getElementById("rolPrefRegistro").innerHTML + xmlRol;
            document.getElementById("rolBuscadoRegistro").innerHTML = document.getElementById("rolBuscadoRegistro").innerHTML + xmlRol;
        }
    };
   
    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/cargarRoles.php", true);
    xhttp.send();

}


function cargarPaises() {
    
    document.getElementById("paisRegistro").innerHTML = "<option selected>Selecciona</option>";
    var xhttp = new XMLHttpRequest();
   
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xmlPaises = this.responseText;
            document.getElementById("paisRegistro").innerHTML = document.getElementById("paisRegistro").innerHTML + xmlPaises;
        }
    };
   
    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/cargarPaises.php", true);
    xhttp.send();

}

function cargarIdioma() {
    
    document.getElementById("idiomaRegistro").innerHTML = "<option selected>Selecciona</option>";
    var xhttp = new XMLHttpRequest();
   
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var xmlIdioma = this.responseText;
            document.getElementById("idiomaRegistro").innerHTML = document.getElementById("idiomaRegistro").innerHTML + xmlIdioma;
        }
    };
   
    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/cargarIdiomas.php", true);
    xhttp.send();

}

function login() {
    
    var correo = document.getElementById("emailLogin").value;
    var contra = document.getElementById("passLogin").value;
   
    var xhttp = new XMLHttpRequest();
   
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            alert(this.responseText);
        }
    };
   
    xhttp.open("GET", "http://" + ip + "/ProyectoDAW/php/login.php?correo=" + correo + "&password=" + contra, true);
    xhttp.send();
    
}

function registro() {
    
       
        var correoR = document.getElementById("correoRegistro").value;
        var nombreR = document.getElementById("nombreRegistro").value;
        var dniR = document.getElementById("dniRegistro").value;
        var apellidosR = document.getElementById("apellidosRegistro").value;
        var telefonoR = document.getElementById("telefonoRegistro").value;
        var passwordR = document.getElementById("passwordRegistro").value;
       
        var xhttp = new XMLHttpRequest();
       
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("fallosRegistro").innerHTML = this.responseText;
            }
        };
       
        xhttp.open("GET", "http://" + ip + ":8080/Diego/registro.php?correo=" + correoR + "&nombre=" + nombreR + "&dni=" + dniR + "&apellidos=" + apellidosR + "&telefono=" + telefonoR + "&password=" + passwordR, true);
        xhttp.send();
        
}
