<?php

class ingreso {


    public function login($usuario,$clave){
        $con= new conectar();
        $conexion=$con->conexion();
        $query="SELECT usuario.id, usuario.nombres, usuario.apellidos, usuario.correo, usuario.telefono, usuario.fechaDeNacimiento,usuario.generoid, usuario.rol_id
        FROM usuario
        INNER JOIN genero on usuario.generoid = genero.id
        WHERE usuario.id='$usuario' AND usuario.pass='$clave'";

        $consulta=$conexion->query($query);

        if($consulta->num_rows>=1){
            $fila=$consulta->fetch_array(MYSQLI_ASSOC);
            session_start();
            $_SESSION['user']=$fila['id'];
            $_SESSION['rol']=$fila['rol_id'];
            $_SESSION['nombre']=$fila['nombres'];
            return true;
            
        }else{
            return false;
        }}
    


    //registrar usuario nuevo
    public function registro($datos){
        
        $con= new conectar();
        $conexion=$con->conexion();
        $query="INSERT INTO usuario (`id`, `nombres`, `apellidos`, `correo`, `telefono`, `fechaDeNacimiento`,`pass`,`generoid`,`rol_id`)
        VALUE ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]','$datos[6]','$datos[7]',2)";

        $resultado = mysqli_query($conexion, $query);
        
        return $resultado;
        
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


    public function suscribirse($datos){

        $con= new conectar();
        $conexion=$con->conexion();
        $query="INSERT INTO `registrosuscripcion` (`fechaDeSuscripcion`, `fechaFinSuscripcion`, `usuarioid`, `tiempoSuscripcionid`)
        VALUE ('$datos[0]','$datos[1]','$datos[2]','$datos[3]')";

        return $resultado = mysqli_query($conexion, $query);


    }
    

    public function consultaSuscripcion($x){
        $con = new conectar();
        $conexion = $con->conexion();
        $sql3 = "SELECT MAX(`fechaFinSuscripcion`) AS finSus, tiemposuscripcion.cantidadTiempo AS plan
        FROM `registrosuscripcion`
        INNER JOIN tiemposuscripcion ON registrosuscripcion.tiempoSuscripcionid = tiemposuscripcion.id WHERE `usuarioid` = '".$x."' ORDER BY `fechaDeSuscripcion` DESC";
        $result = mysqli_query($conexion, $sql3);

        return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

    public function cambioPass($usuario,$actual,$nueva){
        $con= new conectar();
        $conexion=$con->conexion();
        $query="SELECT usuario.id, usuario.pass FROM `usuario`
        WHERE usuario.id='$usuario' AND usuario.pass='$actual'";

        $consulta=$conexion->query($query);

        if ($consulta->num_rows==1) {
            $query2 = "UPDATE usuario SET `pass`='$nueva'
            WHERE `id` ='".$usuario."'";
            return mysqli_query($conexion,$query2);
        }else{
            return false;
        }

    }


}


?>