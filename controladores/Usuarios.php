<?php
//include __DIR__."/../constantes.php";
include  SITE_ROOT.'/datos/UsuarioDAO.php';
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
        $correo=$parametrosPost['correo'];
        $contrasena=$parametrosPost['contrasena'];
        $dni=$parametrosPost['dni'];
        $usuario= new Usuario($correo,$contrasena);
        $usuario->setDni($dni);
        echo $dao->agregarUsuario($usuario);
    }
     
}
