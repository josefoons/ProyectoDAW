window.addEventListener("load", cargar, false);
function cargar() {
    cargarJugadores();
}


function cargarJugadores() {
    var xhttp = new XMLHttpRequest();
    

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let infoUsuarios = JSON.parse(this.responseText);
            colocarUsuarios(infoUsuarios);            
        }
    };

    xhttp.open("GET", ip + "cargarDatosUsuario.php", true);
    xhttp.send();
}


function colocarUsuarios(informacionUsuarios) {
    var campo = document.getElementById("listaUsuarios");
    //nick,pais,idioma,elo,rolPreferido,rolBuscado,region
    for(var k in informacionUsuarios) {

        if(informacionUsuarios[k].region == "KR"){
            campo.innerHTML = campo.innerHTML + 
            "<tr>"
            + "<td>" + informacionUsuarios[k].nick + "</td>"
            + "<td>" + informacionUsuarios[k].pais + "</td>"
            + "<td>" + informacionUsuarios[k].idioma + "</td>"
            + "<td><img style='height: 40px;' src='vista/img/ranks/" + informacionUsuarios[k].elo + ".png'></td>"
            + "<td>" + informacionUsuarios[k].rolPreferido + "</td>"
            + "<td>" + informacionUsuarios[k].rolBuscado + "</td>"
            + "<td>" + informacionUsuarios[k].region + "</td>"
            + " <td><a target='_blank' href='http://www.op.gg/summoner/userName=" + informacionUsuarios[k].nick + "'><img style='height: 35px;' src='vista/img/opgg_icon.png'></a><td>"
            + "</tr>";
        } else {
            campo.innerHTML = campo.innerHTML + 
            "<tr>"
            + "<td>" + informacionUsuarios[k].nick + "</td>"
            + "<td>" + informacionUsuarios[k].pais + "</td>"
            + "<td>" + informacionUsuarios[k].idioma + "</td>"
            + "<td><img style='height: 40px;' src='vista/img/ranks/" + informacionUsuarios[k].elo + ".png'></td>"
            + "<td>" + informacionUsuarios[k].rolPreferido + "</td>"
            + "<td>" + informacionUsuarios[k].rolBuscado + "</td>"
            + "<td>" + informacionUsuarios[k].region + "</td>"
            + " <td><a target='_blank' href='http://" + informacionUsuarios[k].region + ".op.gg/summoner/userName=" + informacionUsuarios[k].nick + "'><img style='height: 35px;' src='vista/img/opgg_icon.png'></a><td>"
            + "</tr>";
        }
        //console.log(k, informacionUsuarios[k]);
    }
}