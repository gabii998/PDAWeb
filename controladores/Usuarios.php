<?php
//include __DIR__."/../constantes.php";
include  SITE_ROOT.'/datos/UsuarioDAO.php';
include  SITE_ROOT.'/datos/PerfilUsuarioDAO.php';

class ControladorUsuarios{

    public static function loguear($data){
        $usuario= new Usuario($data['correo'],$data['contrasena'],null);
        return UsuarioDAO::loguearUsuario($usuario);
    }

    public static function registrar($data){
        $perfil=new PerfilUsuario($data['registroNombre'],$data['registroApellido'],$data['registroFecha'],$data['registroTelefono'],$data['dni']);
        $usuario= new Usuario($data['registroCorreo'],$data['registroContrasena'],$data['dni']);
        PerfilUsuarioDAO::completarPerfil($perfil);
        echo UsuarioDAO::agregarUsuario($usuario);
    }
    
    public static function servirVistaRegistro(){
        if($_SESSION['estado'] != "logueado"){
            require SITE_ROOT.'/vistas/Registro.php';
        }else{
            $titulo="Registro";
            $mensaje="Ya estás registrado,no puedes entrar aquí";
            require SITE_ROOT.'/vistas/Error.php';
        }
    }
     
}
