<?php
include SITE_ROOT."/modelos/PerfilUsuario.php";
include_once "DbHelper.php";

class PerfilUsuarioDAO{
    //Clase que interactúa directamente con la tabla 'UsuariosInfo'

    public function completarPerfil(PerfilUsuario $usuario){
        $conexion=DbHelper::conectar();
        $nombre=$usuario->getNombre();
        $apellido=$usuario->getApellido();
        $nacimiento=$usuario->getFechaNacimiento();
        $telefono=$usuario->getTelefono();
        $correo=$usuario->getCorreo();
        $dni=$usuario->getDni();
        $operacion="INSERT INTO UsuariosInfo (correo,nombre,apellido,nacimiento,telefono,dni) VALUES(?,?,?,?,?,?)";
        $sentencia=$conexion->prepare($operacion);
        $sentencia=bind_param('ssssss',$correo,$nombre,$apellido,$nacimiento,$telefono,$dni);
        if($sentencia->execute()){
            return "registrado";
        }else{
            return "-1";
        }
    }
    public function editarPerfil(){

    }
}