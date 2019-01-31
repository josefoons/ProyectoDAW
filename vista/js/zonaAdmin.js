window.addEventListener("load", cargar, false);
function cargar() {
    document.getElementById("inputNombreUsuarios").addEventListener("keyup", buscarUsuario);
    document.getElementById("lupaBuscar").addEventListener("click", limpiar);
}



function limpiar(){
    document.getElementById("colocarUsuario").innerHTML = "";
}

function buscarUsuario() {
    var xhttp = new XMLHttpRequest();
    var nombre = document.getElementById("inputNombreUsuarios").value;

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let infoUsuario = JSON.parse(this.responseText);
            colocarDatos(infoUsuario);            
        }
    };

    xhttp.open("GET",  ip + "buscarUsuario.php?nombre=" + nombre, true);
    xhttp.send();
}

function colocarDatos(info) {

    if(info[0].rolWeb == 0){
        document.getElementById("colocarUsuario").innerHTML = "<div class='container'><div class='row'><div class='col-sm'>" + info[0].id + "</div><div class='col-sm'>" + info[0].nick + "</div><div class='col-sm'>" + info[0].mail + "</div><div class='col-sm'>" + info[0].mensaje + "</div><div class='col-sm'><button onclick='borrarUsuario(this)' type='button' id='" + info[0].id + "' class='btn btn-info'><i class='fa fa-trash' aria-hidden='true'></i></button>  <button onclick='crearAdmin(this)' type='button' id='" + info[0].id + "#0' class='btn btn-info'><i class='fa fa-star' aria-hidden='true'></i></button></div></div></div>";
    } else {
        document.getElementById("colocarUsuario").innerHTML = "<div class='container'><div class='row'><div class='col-sm'>" + info[0].id + "</div><div class='col-sm'>" + info[0].nick + "</div><div class='col-sm'>" + info[0].mail + "</div><div class='col-sm'>" + info[0].mensaje + "</div><div class='col-sm'><button onclick='borrarUsuario(this)' type='button' id='" + info[0].id + "' class='btn btn-info'><i class='fa fa-trash' aria-hidden='true'></i></button>  <button onclick='crearAdmin(this)' type='button' id='" + info[0].id + "#1' class='btn btn-danger'><i class='fa fa-star' aria-hidden='true'></i></button></div></div></div>";
    }
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

    xhttp.open("GET",  ip + "borrarUsuarioAdmin.php?dato=" + id, true);
    xhttp.send();
}

function crearAdmin(boton) {
    let id = boton.id;
    let array = id.split("#");
    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            if (this.responseText == "OK") {
                alert("Accion Realizada.");
            } else {
                if(this.responseText == "ERROR"){
                    alert("ERROR! Admin no creado!");   
                }
            }
            location.reload(); 
        }
    };

    xhttp.open("GET", ip + "editarAdmin.php?id=" + array[0]+"&rango=" + array[1], true);
    xhttp.send();
}