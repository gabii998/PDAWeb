<?php
include SITE_ROOT."/modelos/PerfilUsuario.php";
include_once "DbHelper.php";

class PerfilUsuarioDAO{

    public function completarPerfil(PerfilUsuario $usuario){
        $conexion=DbHelper::conectar();
        $this->crearTabla();
        $nombre=$usuario->getNombre();
        $apellido=$usuario->getApellido();
        $nacimiento=$usuario->getFechaNacimiento();
        $telefono=$usuario->getTelefono();
        $operacion="INSERT INTO UsuariosInfo (nombre,apellido,nacimiento,telefono) VALUES(?,?,?,?)";
        $sentencia=$conexion->prepare($operacion);
        $sentencia=bind_param('ssss',$nombre,$apellido,$nacimiento,$telefono);
        if($sentencia->execute()){
            return "registrado";
        }else{
            return "-1";
        }
    }
    public function editarPerfil(){

    }
}