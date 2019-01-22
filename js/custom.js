window.addEventListener("load", cargar, false);
function cargar() {
    document.getElementById("registro").addEventListener("click", cargarFormularioRegistro);
    document.getElementById("login").addEventListener("click", cargarFormularioLogin);
}

function cargarFormularioRegistro() {

    document.getElementById("formulario").innerHTML="Hi";
}

function cargarFormularioLogin() {

    document.getElementById("formulario").innerHTML="<input type='text' name='user' placeholder='Username'>"
    + "<input type='password' name='pass' placeholder='Password'>"
    + "<input type='submit' name='login' class='login loginmodal-submit' value='Login'>"
    + "<div class='login-help'>"
    + "<input type='button' value='Register'>";
}