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

    //registrar usuario nuevo
    public function registro($datos){
        
        $con= new conectar();
        $conexion=$con->conexion();
        $query="INSERT INTO usuario (`id`, `nombres`, `apellidos`, `correo`, `telefono`, `fechaDeNacimiento`,`pass`,`generoid`)
        VALUE ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]')";

        return $resultado = mysqli_query($conexion, $query);
        
    }


    //mostra datos del perfil
    public function datosUsuario($x)
    {
        
        $c = new conectar();
        $con = $c->conexion();
        $sql1 = "SELECT * FROM usuario WHERE usuario.id ='".$x."'";
        $result = mysqli_query($con,$sql1); 

    return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }



    public function actalizarDatos($datos,$y){
        $con = new conectar();
        $conexion = $con->conexion();
        $sql2 = "UPDATE usuario SET 
        `nombres`='$datos[0]', `apellidos`='$datos[1]', `correo`='$datos[2]', `telefono`='$datos[3]', `fechaDeNacimiento`='$datos[4]',`generoid`='$datos[5]'
        WHERE `id` ='".$y."'";

        return mysqli_query($conexion,$sql2);
    }
    

}


?>