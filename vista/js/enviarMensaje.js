window.addEventListener("load", cargar, false);
function cargar() {
    cargarDatos();
    document.getElementById("enviarMensaje").addEventListener("click", enviarMensaje);
    document.getElementById("mensaje").addEventListener("keyup", letrasRestantes);
}

var link = limpiarDireccion();

function limpiarDireccion() {
    let direccion = window.location.href;
    let todo = direccion.split("?");
    let info = todo[1].split("&");

    let idEmisorA = info[0].split("=");
    let idReceptorA = info[1].split("=");

    return idEmisorA[1] + " " + idReceptorA[1];
}

function cargarDatos() {
    let all = link.split(" ");
    let emisor = all[0];
    let receptor = all[1];

    obtenerNombre(emisor, "emisor");
    obtenerNombre(receptor, "receptor");
    
}

function obtenerNombre(id, campo) {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if(campo == "emisor"){
                document.getElementById("emisor").value = this.responseText;
            } else {
                document.getElementById("receptor").value = this.responseText;
            }
        }
    };

    xhttp.open("GET", ip + "mensajes/getNick.php?id=" + id, true);
    xhttp.send();
}

function enviarMensaje() {
    let all = link.split(" ");
    let emisor = all[0];
    let receptor = all[1];
    let mensaje = document.getElementById("mensaje").value;
    let titulo = document.getElementById("titulo").value;

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if(this.responseText == "OK"){
                document.getElementById("areaAlerta").innerHTML = "<div class='alert alert-success' role='alert'> Enviado correctamente! </div>";
            } else {
                document.getElementById("areaAlerta").innerHTML = "<div class='alert alert-danger' role='alert'> ERROR DESCONOCIDO! </div>";
            }

            document.getElementById("enviarMensaje").disabled = true;
            setTimeout(function() {
                window.location.href = "index.php";
                document.getElementById("titulo").value = "";
                document.getElementById("mensaje").value = "";
                document.getElementById("areaAlerta").innerHTML = "";
              }, 2000);
        }
    };

    xhttp.open("GET", ip + "mensajes/enviarMensaje.php?emisor=" + emisor + "&receptor=" + receptor + "&mensaje=" + mensaje + "&titulo=" + titulo, true);
    xhttp.send();
}

function letrasRestantes() {
    let tamanyo = document.getElementById("mensaje").value.length;
    let contador = document.getElementById("letrasTotales");

    contador.innerHTML = 200 - (tamanyo);

}