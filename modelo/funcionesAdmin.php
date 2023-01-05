<?php



class administrador {
    
    public function tablaUsu()
    {
        
        $c = new conectar();
        $con = $c->conexion();
        $sql1 = "SELECT usuario.id, usuario.nombres, usuario.apellidos, usuario.correo, usuario.telefono FROM usuario";
        $result = mysqli_query($con,$sql1); 

    return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

}



?>