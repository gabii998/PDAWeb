<?php
//include __DIR__."/../constantes.php";
include  SITE_ROOT.'/datos/UsuarioDAO.php';
include  SITE_ROOT.'/datos/PerfilUsuarioDAO.php';

class ControladorUsuarios{
    public static function loguear($parametrosPost){
        $dao=new UsuarioDAO();
        $correo=$parametrosPost['correo'];
        $contrasena=$parametrosPost['contrasena'];
        $usuario= new Usuario($correo,$contrasena);
        return $dao->loguearUsuario($usuario);
    }
    public static function registrar($parametrosPost){
        $dao=new UsuarioDAO();
        $correo=$parametrosPost['registroCorreo'];
        $contrasena=$parametrosPost['registroContrasena'];
        $dni=$parametrosPost['dni'];
        $usuario= new Usuario($correo,$contrasena);
        $usuario->setDni($dni);
        echo $dao->agregarUsuario($usuario);
    }
    public static function completarPerfil($parametrosPost){
        $dao=new PerfilUsuarioDAO();
        $nombre=$parametrosPost['nombre'];
        $apellido=$parametrosPost['apellido'];
        $fechaNacimiento=$parametrosPost['fecha'];
        $telefono=$parametrosPost['telefono'];
        $perfil=new PerfilUsuario($nombre,$apellido,$fechaNacimiento,$telefono);
        echo $dao->completarPerfil($perfil);
    }
     
}
