window.addEventListener("load", cargar, false);
function cargar() {
    obtenerDatos();
    if(document.getElementById("outer")){
        cargarPuntuacion();
    }
}

var link = window.location.href;
var arrayLink = link.split("=");
var id = arrayLink[1];
var infoUsuario = "";
var elo = "";
var oldPass = "";

function limpiarCampos() {
    document.getElementById("notificacionPassword").innerHTML = "";
    document.getElementById("newPassword").value = "";
    document.getElementById("newPassword_2").value = "";
    document.getElementById("oldPassword").value = "";
}

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

    document.getElementById("eloImagenPerfil").src = "vista/img/ranks/" + infoUsuario[0].elo + ".png";
    document.getElementById("imagenUsuario").style.backgroundImage = "url('vista/img/imgUsuarios/" + infoUsuario[0].imgPerfil + "')";
    document.getElementById("nickPerfilHeader").innerText = infoUsuario[0].nick;
    document.getElementById("nickUsuarioPerfil").innerText = infoUsuario[0].nick;
    if(document.getElementById("mailUsuarioPerfil")){
        document.getElementById("mailUsuarioPerfil").innerText = infoUsuario[0].mail;
    }
    document.getElementById("paisUsuarioPerfil").innerText = traducirCodigos(infoUsuario[0].pais, "pais");
    document.getElementById("idiomaUsadoPerfil").innerText = traducirCodigos(infoUsuario[0].idioma, "idioma");
    document.getElementById("rolPreferidoPerfil").src = "vista/img/posiciones/" + infoUsuario[0].rolPreferido + ".png";
    document.getElementById("rolBuscadoPerfil").src = "vista/img/posiciones/" + infoUsuario[0].rolBuscado + ".png";
    document.getElementById("regionUsuarioPerfil").innerText = traducirCodigos(infoUsuario[0].region, "region");
    document.getElementById("mensajeUsuarioPerfil").innerText = infoUsuario[0].mensaje;

    document.getElementById("nombreRolBuscado").innerText = traducirCodigos(infoUsuario[0].rolBuscado, "rol")
    document.getElementById("nombreRolPreferido").innerText = traducirCodigos(infoUsuario[0].rolPreferido, "rol")


    //ZONA REPORTE 
    document.getElementById("nickReporte").innerText = infoUsuario[0].nick;
}

/* CAMBIOS EN EL PERFIL */


function bloquearCampos() {
    actualizarDatos();
    document.getElementById("listadoPaises").innerHTML = "";
    document.getElementById("zonaBotonEliminar").innerHTML = "";
    obtenerDatos();
}

function abrirCampos() {
    cargarElo();
    let mail = document.getElementById("mailUsuarioPerfil").innerText;
    let comentario = document.getElementById("mensajeUsuarioPerfil").innerText;

    document.getElementById("alertaConfirmacion").innerHTML = "";
    document.getElementById("zonaBotonEliminar").innerHTML = "<center><button onclick='bloquearCampos()' type='button' class='btn btn-success'>GUARDAR</button></center>";
    document.getElementById("mailUsuarioPerfil").innerHTML = "<input type='text' class='form-control' id='mailUsuarioPerfilInput' value='" + mail + "'>";
    document.getElementById("mensajeUsuarioPerfil").innerHTML = "<textarea class='form-control' id='mensajeUsuarioPerfilArea' rows='3' maxlength='300'>" + comentario + "</textarea>";

}

function actualizarDatos() {
    var xhttp = new XMLHttpRequest();

    let mensaje = document.getElementById("mensajeUsuarioPerfilArea").value;
    let mail = document.getElementById("mailUsuarioPerfilInput").value;
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
        document.getElementById("eloImagenPerfil").src = "vista/img/ranks/" + elo + ".png";
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
            zonaElo.innerHTML = "<div class='form-group'><select class='form-control' style='width: 310px;' id='nuevoEloPerfil'><option value='igual' selected>Selecciona</option>" + xmlRol + "</select></div>";
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

function cargarPuntuacion() {
    let idUsuarioSesion = document.getElementById("divIDUsuario").innerHTML;
    let botonUP = document.getElementById("upButton");
    let botonDown = document.getElementById("downButton");
    let zonaDePuntuacion = document.getElementById("outer");

    botonUP.disabled = false;
    botonDown.disabled = false;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            switch (this.responseText) {
                case "1":
                    botonUP.style.visibility = 'hidden';
                    botonDown.style.visibility = 'hidden';
                    zonaDePuntuacion.innerHTML = "<FONT COLOR='green'>POSITIVA</FONT>";
                    break;
                case "2":
                    botonUP.style.visibility = 'hidden';
                    botonDown.style.visibility = 'hidden';
                    zonaDePuntuacion.innerHTML = "<FONT COLOR='red'>NEGATIVA</FONT>";
                    break;
            }
        }
    };

    xhttp.open("GET", ip + "usuario/cargarPuntuacion.php?idPerfil=" + id + "&idSesion=" + idUsuarioSesion, true);
    xhttp.send();

}

function crearPuntuacion(boton) {
    let idUsuarioSesion = document.getElementById("divIDUsuario").innerHTML;
    let nota = boton.id;

    if (nota == "upButton") {
        nota = "1";
    } else {
        nota = "2";
    }

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            console.log(this.responseText);
            cargarPuntuacion();
        }
    };

    xhttp.open("GET", ip + "usuario/crearPuntuacion.php?idPerfil=" + id + "&idSesion=" + idUsuarioSesion + "&nota=" + nota, true);
    xhttp.send();
}

function crearReporte() {

    let nickUsuario = document.getElementById("nickUSuarioReportando").value;
    let split = nickUsuario.split(" - ");
    let idUsuario = split[0];
    let razon = document.getElementById("razonReporte").value;
    let idUsuarioReportado = id;
    let comentario = document.getElementById("comentarioReporte").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            location.reload();
        }
    };

    xhttp.open("GET", ip + "usuario/crearReporte.php?nickUsuario=" + idUsuario + "&idUsuarioReportado=" + idUsuarioReportado + "&razon=" + razon + "&comentario=" + comentario, true);
    xhttp.send();

}

function getNick(idUsuarioReporte) {
    let campo = document.getElementById("nickUSuarioReportando").value;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("nickUSuarioReportando").value = idUsuarioReporte + " - " + this.responseText;
        }
    };

    xhttp.open("GET", ip + "mensajes/getNick.php?id=" + idUsuarioReporte, true);
    xhttp.send();
}

function traducirCodigos(item, tipo) {

    let paises = { "CN": "China", "DE": "Alemania", "ES":"España", "FR": "Francia", "GB": "Reino Unido", "IT": "Italia", "KR": "Corea del Sud" };
    let idioma = { "DE": "Aleman", "EN": "Ingles", "ESP":"Español", "FR": "Frances", "IT": "Italiano", "KR": "Coreano", "ZH": "Chino" };
    let region = { "BR": "Brasil", "CN": "China", "EUNE":"Europa Este", "EUW":"Europa Oeste", "JP":"Japon", "KR":"Corea", "LAN":"Latinoamerica Norte", "LAS":"Latinoamerica Sur", "NA":"America del Norte", "OCE":"Oceania", "RU":"Rusia", "SEA":"Sudeste Asia", "TR":"Turquia" };
    let rol = { "TOP": "Top Laner", "JUNG": "Jungler", "MID":"Mid Laner", "ADC": "AD Carry", "SUPP": "Support"};

    switch (tipo) {
        case "pais":
            return paises[item];
            break;
        case "idioma":
            return idioma[item];
            break;
        case "region":
            return region[item];
            break;
        case "rol":
            return rol[item];
            break;
    }
}