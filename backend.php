<?php
$usuario = $_POST['usuario'];
$clave = $_POST['clave'];
if($usuario && $clave){
    echo "ok";
} else {
    echo "error";
}
?>
