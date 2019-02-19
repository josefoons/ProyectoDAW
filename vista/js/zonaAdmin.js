window.addEventListener("load", cargar, false);
function cargar() {
    document.getElementById("inputNombreUsuarios").addEventListener("keyup", buscarUsuario);
    document.getElementById("lupaBuscar").addEventListener("click", limpiarLISTA);
}

function limpiarLISTA(){
    document.getElementById("colocarUsuario").innerHTML = "";
}

function buscarUsuario() {
    var xhttp = new XMLHttpRequest();
    var nombre = document.getElementById("inputNombreUsuarios").value;

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let infoUsuario = JSON.parse(this.responseText);
            document.getElementById("colocarUsuario").innerHTML = "";
            let texto = document.getElementById("inputNombreUsuarios");

            if(texto.value != ""){
                colocarDatos(infoUsuario);  
            }       
        }
    };

    xhttp.open("GET",  ip + "admin/buscarUsuario.php?nombre=" + nombre, true);
    xhttp.send();
}

function colocarDatos(info) {

    let campo = document.getElementById("colocarUsuario");
    for (let k in info) {
        if(info[k].rolWeb == 0){
            campo.innerHTML = campo.innerHTML + "<div class='container'><div class='row'><div class='col-sm'>" + info[k].id + "</div><div class='col-sm'>" + info[k].nick + "</div><div class='col-sm'>" + info[k].mail + "</div><div class='col-sm'><button onclick='borrarUsuario(this)' type='button' id='" + info[k].id + "' class='btn btn-info'><i class='fa fa-trash' aria-hidden='true'></i></button>  <button onclick='crearAdmin(this)' type='button' id='" + info[k].id + "#0' class='btn btn-info'><i class='fa fa-star' aria-hidden='true'></i></button></div></div></div>";
        } else {
            campo.innerHTML = campo.innerHTML + "<div class='container'><div class='row'><div class='col-sm'>" + info[k].id + "</div><div class='col-sm'>" + info[k].nick + "</div><div class='col-sm'>" + info[k].mail + "</div><div class='col-sm'><button onclick='borrarUsuario(this)' type='button' id='" + info[k].id + "' class='btn btn-info'><i class='fa fa-trash' aria-hidden='true'></i></button>  <button onclick='crearAdmin(this)' type='button' id='" + info[k].id + "#1' class='btn btn-danger'><i class='fa fa-star' aria-hidden='true'></i></button></div></div></div>";
        }
    };


}

function activarAlerta(respuesta) {
    let alerta = document.getElementById("zonaAlertas");

    if (respuesta == "OK") {
        alerta.innerHTML = "<div class='alert alert-success' role='alert'> Admin actualizado correctamente! </div>";
    } else {
        alerta.innerHTML = "<div class='alert alert-danger' role='alert'> Error al actualizar datos!</div>";
    }

    document.getElementById("inputNombreUsuarios").value = "";
    document.getElementById("colocarUsuario").innerHTML = "";
}

function borrarUsuario(boton) {
    let id = boton.id;

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "OK") {
                alert("BORRADO CORRECTAMENTE");
            } else {
                if(this.responseText == "ERROR"){
                    alert("ERROR! Usuario no borrado.");   
                }
            }
            location.reload(); 
        }
    };

    xhttp.open("GET",  ip + "admin/borrarUsuarioAdmin.php?dato=" + id, true);
    xhttp.send();
}

function crearAdmin(boton) {
    let id = boton.id;
    let array = id.split("#");
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            activarAlerta(this.responseText);
        }
    };

    xhttp.open("GET", ip + "admin/editarAdmin.php?id=" + array[0]+"&rango=" + array[1], true);
    xhttp.send();
}