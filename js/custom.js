window.addEventListener("load", cargar, false);
function cargar(){

    document.getElementById("boton-login").addEventListener("click", login);
    
}

var ip = "localhost";

function login() {
    
        var correo = document.getElementById("emailLogin").value;
        var contra = document.getElementById("passLogin").value;
       
        var xhttp = new XMLHttpRequest();
       
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                alert(this.responseText);
            }
        };
       
        xhttp.open("GET", "http://" + ip + "/php/login.php?correo=" + correo + "&password=" + contra, true);
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
