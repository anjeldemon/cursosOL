<?php
session_start();
require_once "../modelo/conexion.php";
require_once "../modelo/usuario.php";

$passActual = md5 ($_POST['passActual']);
$passNuevo2 = md5 ($_POST['passNuevo2']);
$usuario = $_SESSION['user'];

$obj = new ingreso();


if ($obj->cambioPass($usuario, $passActual, $passNuevo2)==1) {
    print "<script>alert(\"Cambio realizado con exito, su sesion será finalizada\");
        window.location='signout.php';</script>";
}else{
    print "<script>alert(\"El cambio no fue realizado\");
    window.location='../vista/usuSesion.php';</script>";
}

?>