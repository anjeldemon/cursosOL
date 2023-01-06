<?php
session_start();

$rol = $_SESSION['rol'];

$opcion = $_GET['opcion'];

// if ($rol==0) {
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

        case 'usuarios':
            print "<script>
                window.location='../vista/admin/usuarios.php';
                </script>";
            break;

        case 'reportes':
            print "<script>
                window.location='../vista/admin/reportes.php';
                </script>";
            break;

        default:
            print "<script>
                window.location='../index.php';
                </script>";
            break;
    }
// } else {
//     echo $rol;
// }

?>