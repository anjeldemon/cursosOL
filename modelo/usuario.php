<?php

class ingreso {


    public function login($usuario,$clave){
        $con= new conectar();
        $conexion=$con->conexion();
        $query="SELECT * FROM usuario WHERE id='$usuario' AND pass='$clave'";

        $consulta=$conexion->query($query);

        if($consulta->num_rows>=1){
            $fila=$consulta->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['user']=$fila['id'];
            $_SESSION['nombre']=$fila['nombres'];
            return true;
            
        }else{
            return false;
        }}
    //         header("Location: ../visual/empleado/empleado.php");
    //     }else{
    //         print "<script>alert(\"los datos no son correctos.\");
    //         window.location='../ingresar.php';</script>";
    //     }

    // }


}


?>