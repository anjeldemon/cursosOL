<?php
session_start();

$rol = $_SESSION['rol'];

$opcion = $_GET['opcion'];

if ($rol) {
    switch ($opcion) {
        case 'cursos':
            print "<script>
                window.location='../vista/usuario/cursos.php';
                </script>";
            break;

        case 'productos':
            print "<script>
                window.location='../vista/usuario/productos.php';
                </script>";
            break;

        case 'perfil':
            print "<script>
                window.location='../vista/usuSesion.php';
                </script>";
            break;
        default:
            print "<script>
                window.location='../index.php';
                </script>";
            break;
    }
}else{
    echo "no";
}

?>