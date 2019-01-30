<?php
function limpiar(){
    $path_parts = pathinfo($_SERVER["PHP_SELF"]);
    return $path_parts['basename'];
}
?>
