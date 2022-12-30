<?php
require_once('../modelo/conexion.php');

require_once "../modelo/usuario.php";

$id = $_POST['idRegistro'];
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$fechaNacimiento = $_POST['fechaNacimiento'];
$pass = md5($_POST['idRegistro']);
$genero = $_POST['genero'];

$datos = [
    $id,
    $nombres ,
    $apellidos,
    $correo,
    $telefono,
    $fechaNacimiento,
    $pass,
    $genero
];

$registro = new ingreso();


if ($registro->registro($datos)==1){
        print"<script>alert(\"Datos ingresados\");
        window.location='../index.php';</script>";
    }
    else{
        print "<script>alert(\"Datos no ingresados ingresados\");
        window.location='../index.php';</script>";
    }


?>