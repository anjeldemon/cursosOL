<?php
require_once('../modelo/conexion.php');

require_once "../modelo/usuario.php";

$fechaActual = date('Y-m-d');

$usuario = $_GET['user'];

$tiempoSus = $_GET['plan'];

$validacion = new ingreso();

$resultado = $validacion->consultaSuscripcion($usuario);

foreach ($resultado as $key) {
    
    if($key['finSus'] > $fechaActual){
        print"<script>alert(\"Ya tienes una suscripción activa\");
        window.location='../vista/usuario/productos.php';</script>";
    }else{
        switch ($tiempoSus) {
            case '365':
                
                $fechaFin = strtotime('+365 day', strtotime($fechaActual));
                $fechaFin = date('Y-m-d', $fechaFin);

                $datos=[
                $fechaActual,
                $fechaFin,
                $usuario,
                $tiempoSus
                ];
                if ($validacion->suscribirse($datos)==1) {
                    print"<script>alert(\"Suscrito por 1 año.\");
                    window.location='../vista/usuSesion.php';</script>";
                }else{
                    print "<script>alert(\"Error en suscrpción.\");
                    window.location='../vista/usuario/productos.php';</script>";
                }

                break;
            case '180':
                $fechaFin = strtotime('+180 day', strtotime($fechaActual));
                echo $fechaFin = date('Y-m-d', $fechaFin);

                $datos=[
                $fechaActual,
                $fechaFin,
                $usuario,
                $tiempoSus
                ];
                if ($validacion->suscribirse($datos)==1) {
                    print"<script>alert(\"Suscrito por 6 meses.\");
                    window.location='../vista/usuSesion.php';</script>";
                }else{
                    print "<script>alert(\"Error en suscrpción.\");
                    window.location='../vista/usuario/productos.php';</script>";
                }

                break;
            
            default:
                echo "sin plan";
                break;
        }
    }
}

?>