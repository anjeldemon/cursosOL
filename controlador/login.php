<?php
require_once "../modelo/conexion.php";
require_once "../modelo/usuario.php";

$usaurio=$_POST['idIngreso'];
$clave= md5 ($_POST['pass']);


$obj=new ingreso();
$reg=$obj->login($usaurio,$clave);

// switch ($reg) {
//     case 1:
//         print"<script>alert(\"Bienvenido\");
//         window.location='../vista/usuSesion.php';</script>";
//         break;
//     case 2:
//         print"<script>alert(\"Bienvenido\");
//         window.location='../vista/administrador.php';</script>";
//     default:
//         print"<script>alert(\"fallo al ingresar los datos.\");
//         window.location='../index.html';</script>";
//         break;
// }





if($reg){
    print"<script>alert(\"Bienvenido\");
    window.location='../vista/usuSesion.php';</script>";
}else{
    print"<script>alert(\"fallo al ingresar los datos.\");
    window.location='../index.php';</script>";
}





?>