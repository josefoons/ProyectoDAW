//window.location='login.php';
window.addEventListener("load", cargar, false);
function cargar() {
    document.getElementById("login").addEventListener("click", redireccion);
    document.getElementById("registro").addEventListener("click", redireccion);
}

function redireccion() {
    var id = this.id;
    switch (id) {
        case login:
            window.location = 'login.php';
            break;
        case registro:
            window.location = 'registro.php';
            break;
        default:
            window.location = 'logout.php';
            break;
    }
}