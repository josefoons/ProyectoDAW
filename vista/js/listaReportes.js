window.addEventListener("load", cargar, false);
function cargar() {
    cargarReportes();
}

function cargarReportes() {

    var xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            let reportes = JSON.parse(this.responseText);
            colocarReportes(reportes);
        }
    };

    xhttp.open("GET", ip + "admin/cargarReportes.php", true);
    xhttp.send();

}

function colocarReportes(reportes) {

    let campo = document.getElementById("listaReportes");

    for (var k in reportes) {
        campo.innerHTML = campo.innerHTML +
            "<tr>"
            + "<td><a href='zonaUsuario.php?id=" + reportes[k].idUsuarioReportado + "'>" + reportes[k].idUsuarioReportado + "</a></td>"
            + "<td><a href='zonaUsuario.php?id=" + reportes[k].idUsuarioCreado + "'>" + reportes[k].idUsuarioCreado + "</a></td>"
            + "<td>" + reportes[k].razon  + "</td>"
            + "<td><button type='button' class='btn btn-info' data-toggle='modal' data-target='#comentarioModal'><i class='fa fa-comments' aria-hidden='true'></i></button></td>"
            + "<td>" + reportes[k].fecha  + "</td>"
            + "<td><button onclick='borrarReporte(" + reportes[k].idReporte + ")' type='button' class='btn btn-danger'><i class='fa fa-trash' aria-hidden='true'></i></button><td>"
            + "</tr>";
    }

}
