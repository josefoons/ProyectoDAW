window.addEventListener("load", cargar, false);

function cargar() {
    obtenerDatos();
    document.getElementById("botonEditarPassword").addEventListener("click", function limpiarCampos() {
        document.getElementById("notificacionPassword").innerHTML = "";
        document.getElementById("newPassword").value = "";
        document.getElementById("newPassword_2").value = "";
        document.getElementById("oldPassword").value = "";
    });
}

var link = window.location.href;
var arrayLink = link.split("=");
var id = arrayLink[1];
var infoUsuario = "";
var elo = "";
var oldPass = "";


function obtenerDatos() {
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            infoUsuario = JSON.parse(this.responseText);
            colocarDatos();
        }
    };

    xhttp.open("GET", ip + "usuario/cargarInfoUsuario.php?id=" + id, true);
    xhttp.send();
}

function colocarDatos() {

    //console.log(infoUsuario[0]);
    document.getElementById("rangoImagen").src = "vista/img/ranks/" + infoUsuario[0].elo + ".png";
    document.getElementById("nickPerfilHeader").innerText = infoUsuario[0].nick;
    document.getElementById("nickPerfil").value = infoUsuario[0].nick;
    document.getElementById("mailPerfil").value = infoUsuario[0].mail;
    document.getElementById("paisPerfil").value = infoUsuario[0].pais;
    document.getElementById("idiomaPerfil").value = infoUsuario[0].idioma;
    document.getElementById("rolPrefePerfil").value = infoUsuario[0].rolPreferido;
    document.getElementById("rolBuscadoPerfil").value = infoUsuario[0].rolBuscado;
    document.getElementById("regionPerfil").value = infoUsuario[0].region;
    document.getElementById("mensajePerfil").value = infoUsuario[0].mensaje;
}

/* CAMBIOS EN EL PERFIL */


function editarBoton() {
    let botonInciar = document.getElementById("botonEditarDatos");

    if (botonInciar.value == "cambiar") {
        abrirCampos(botonInciar);
        botonInciar.value = "finalizar";
    } else {
        bloquearCampos(botonInciar);
        botonInciar.value = "cambiar";
    }
}

function bloquearCampos() {
    document.getElementById("mensajePerfil").readOnly = true;
    document.getElementById("mailPerfil").readOnly = true;
    actualizarDatos();
    document.getElementById("listadoPaises").innerHTML = "";
    document.getElementById("botonEditarDatos").innerHTML = "CAMBIAR DATOS";
}

function abrirCampos() {
    obtenerDatos();
    document.getElementById("alertaConfirmacion").innerHTML = "";
    document.getElementById("mensajePerfil").readOnly = false;
    document.getElementById("mailPerfil").readOnly = false;
    document.getElementById("botonEditarDatos").innerHTML = "FINALIZAR";
    cargarElo();
}

function actualizarDatos() {
    var xhttp = new XMLHttpRequest();

    let mensaje = document.getElementById("mensajePerfil").value;
    let mail = document.getElementById("mailPerfil").value;
    elo = document.getElementById("nuevoEloPerfil").value;


    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "OK") {
                activarAlerta("si");
            } else {
                if (this.responseText == "ERROR") {
                    activarAlerta("no");
                }
            }
        }
    };

    if (elo == "igual") {
        elo = infoUsuario[0].elo;
        xhttp.open("GET", ip + "usuario/actualizarDatosPerfil.php?mensaje=" + mensaje + "&mail=" + mail + "&elo=" + elo + "&id=" + id, true);
    } else {
        xhttp.open("GET", ip + "usuario/actualizarDatosPerfil.php?mensaje=" + mensaje + "&mail=" + mail + "&elo=" + elo + "&id=" + id, true);
    }
    xhttp.send();
}

function activarAlerta(respuesta) {
    let alerta = document.getElementById("alertaConfirmacion");

    if (respuesta == "si") {
        alerta.innerHTML = "<div class='alert alert-success' role='alert'> Datos actualizados correctamente! </div>";
        document.getElementById("rangoImagen").src = "vista/img/ranks/" + elo + ".png";
    } else {
        alerta.innerHTML = "<div class='alert alert-danger' role='alert'> Error al actualizar datos! </div>";
    }
}


function cargarElo() {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            var xmlRol = this.responseText;
            let zonaElo = document.getElementById("listadoPaises");
            zonaElo.innerHTML = "<div class='form-group'><select class='form-control' id='nuevoEloPerfil'><option value='igual' selected>Selecciona</option>" + xmlRol + "</select></div>";
        }
    };

    xhttp.open("GET", ip + "registro/cargarElo.php", true);
    xhttp.send();
}

function actualizarPass() {

    let alerta = document.getElementById("notificacionPassword");
    let old = document.getElementById("oldPassword").value;
    let nueva = document.getElementById("newPassword").value;
    let nueva2 = document.getElementById("newPassword_2").value;

    if (nueva != nueva2 || nueva == "" || nueva2 == "") {
        alerta.innerHTML = "<div class='alert alert-danger' role='alert'> Error en contraseñas nuevas! </div>";
    } else {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                //alert(this.responseText);
                switch (this.responseText) {
                    case "ERROR-ACTUALIZAR":
                        alerta.innerHTML = "<div class='alert alert-danger' role='alert'> No se puede actualizar! </div>";
                        break;

                    case "OK":
                        alerta.innerHTML = "<div class='alert alert-success' role='alert'> Contraseña actualizada correctamente! </div>";
                        break;

                    case "DIREFENTE-ANTIGUA":
                        alerta.innerHTML = "<div class='alert alert-danger' role='alert'> Contraseña actual no correcta! </div>";
                        break;
                        
                    case "NO-CUMPLE":
                        alerta.innerHTML = "<div class='alert alert-danger' role='alert'> Debe contener 8 caracteres, un numero, y al menos una mayuscula y minuscula! </div>";
                        break;
                }

            }
        };

        xhttp.open("GET", ip + "usuario/actualizarPass.php?id=" + id + "&nueva=" + nueva + "&old=" + old, true);
        xhttp.send();
    }


}
