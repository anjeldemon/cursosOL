<?php 
session_start();
require_once '../modelo/conexion.php';
require_once "../modelo/usuario.php";



$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$fechaNacimiento = $_POST['fechaDeNacimiento'];
$genero = $_POST['generoid'];

$datos = [
    $nombres,
    $apellidos,
    $correo,
    $telefono,
    $fechaNacimiento,
    $genero
];


$usuario = $_SESSION['user'];
$modifi = new ingreso();

// echo var_dump($datos) ;
// echo "<br>";
// echo $usuario;


if ($modifi->actalizarDatos($datos,$usuario)==1){
            print"<script>alert(\"Datos actualizados\");
        window.location='../vista/usuSesion.php';</script>";
    }
    else{
        print "<script>alert(\"Datos no ingresados\");
        window.location='../vista/usuSesion.php';</script>";
    }


?>