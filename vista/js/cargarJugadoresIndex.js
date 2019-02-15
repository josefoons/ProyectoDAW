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
    //xhttp.withCredentials = true;
    
    xhttp.open("GET", ip + "index/cargarDatosUsuario.php", true);
    xhttp.send();
}


function colocarUsuarios(informacionUsuarios) {
    var campo = document.getElementById("listaUsuarios");
    
    for(var k in informacionUsuarios) {

        if(informacionUsuarios[k].region == "KR"){
            campo.innerHTML = campo.innerHTML + 
            "<tr>"
            + "<td>" + informacionUsuarios[k].nick + "</td>"
            + "<td>" +  traducirCodigos(informacionUsuarios[k].pais,"pais") + "</td>"
            + "<td>" +  traducirCodigos(informacionUsuarios[k].idioma,"idioma") + "</td>"
            + "<td><img style='height: 40px;' src='vista/img/ranks/" + informacionUsuarios[k].elo + ".png'></td>"
            + "<td style='text-align: center;'><img style='height: 40px;' alt=" + informacionUsuarios[k].rolPreferido + " src='vista/img/posiciones/" + informacionUsuarios[k].rolPreferido + ".png'></td>"
            + "<td style='text-align: center;'><img style='height: 40px;' alt=" + informacionUsuarios[k].rolBuscado + " src='vista/img/posiciones/" + informacionUsuarios[k].rolBuscado + ".png'></td>"
            + "<td>" +  traducirCodigos(informacionUsuarios[k].region,"region") + "</td>"
            + " <td><a target='_blank' href='http://www.op.gg/summoner/userName=" + informacionUsuarios[k].nick + "'><img style='height: 35px;' src='vista/img/opgg_icon.png'></a>  <a href='zonaUsuario.php?id=" + informacionUsuarios[k].id + "' class='btn btn-light'><i class='fa fa-user' aria-hidden='true'></i></a><td>";
            + "</tr>";
        } else {
            campo.innerHTML = campo.innerHTML + 
            "<tr>"
            + "<td>" + informacionUsuarios[k].nick + "</td>"
            + "<td>" +  traducirCodigos(informacionUsuarios[k].pais,"pais") + "</td>"
            + "<td>" +  traducirCodigos(informacionUsuarios[k].idioma,"idioma") + "</td>"
            + "<td><img style='height: 40px;' src='vista/img/ranks/" + informacionUsuarios[k].elo + ".png'></td>"
            + "<td style='text-align: center;'><img style='height: 40px;' alt=" + informacionUsuarios[k].rolPreferido + " src='vista/img/posiciones/" + informacionUsuarios[k].rolPreferido + ".png'></td>"
            + "<td style='text-align: center;'><img style='height: 40px;' alt=" + informacionUsuarios[k].rolBuscado + " src='vista/img/posiciones/" + informacionUsuarios[k].rolBuscado + ".png'></td>"
            + "<td>" +  traducirCodigos(informacionUsuarios[k].region,"region") + "</td>"
            + " <td><a target='_blank' href='http://" + informacionUsuarios[k].region + ".op.gg/summoner/userName=" + informacionUsuarios[k].nick + "'><img style='height: 35px;' src='vista/img/opgg_icon.png'></a>  <a href='zonaUsuario.php?id=" + informacionUsuarios[k].id + "' class='btn btn-light'><i class='fa fa-user' aria-hidden='true'></i></a><td>";
            + "</tr>";
        }
    }
}

function traducirCodigos(item, tipo) {

    let paises = { "CN": "China", "DE": "Alemania", "ES":"España", "FR": "Francia", "GB": "Reino Unido", "IT": "Italia", "KR": "Corea del Sud" };
    let idioma = { "DE": "Aleman", "EN": "Ingles", "ESP":"Español", "FR": "Frances", "IT": "Italiano", "KR": "Coreano", "ZH": "Chino" };
    let region = { "BR": "Brasil", "CN": "China", "EUNE":"Europa Este", "EUW":"Europa Oeste", "JP":"Japon", "KR":"Corea", "LAN":"Latinoamerica Norte", "LAS":"Latinoamerica Sur", "NA":"America del Norte", "OCE":"Oceania", "RU":"Rusia", "SEA":"Sudeste Asia", "TR":"Turquia" };

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
    }
}