<?php
session_start();
require_once '../modelo/conexion.php';
require_once "../modelo/funcionesAdmin.php";

$admin = new administrador();

foreach ($_POST['tablaUsu'] as $key) {
    if ($admin->resetPass($key)==1){
        print"<script>alert(\"Claves reiniciadas.\");
        window.location='../vista/usuSesion.php';</script>";
    }else{
        print"<script>alert(\"error\");
        window.location='../vista/usuSesion.php';</script>";
    }
}





?>

