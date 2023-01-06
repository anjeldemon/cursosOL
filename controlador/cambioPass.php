<?php
session_start();
require_once "../modelo/conexion.php";
require_once "../modelo/usuario.php";

$passActual = md5 ($_POST['passActual']);
$passNuevo = $_POST['passNuevo'];
$passNuevo2 = $_POST['passNuevo2'];


if ($passNuevo == $passNuevo2) {

    echo "ok";
}else{
    
}

?>