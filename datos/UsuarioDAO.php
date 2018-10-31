<?php
include SITE_ROOT."/modelos/Usuario.php";
include_once "DbHelper.php";
include_once "Querys.php";

class UsuarioDAO implements Querys{
    //Clase que interactúa directamente con la tabla 'Usuarios'

    public static function crearTablaUsuarios(){
        $DbHelper=new DbHelper();
        $DbHelper->ejecutarQuery(Querys::CREAR_TABLA_USUARIO);
    }
   
    public static function agregarUsuario(Usuario $usuario){
        self::crearTablaUsuarios();
        $DbHelper=new DbHelper();
        $usuario->setContrasena(password_hash($usuario->getContrasena(), PASSWORD_ARGON2I));
        $sentencia=$DbHelper->ejecutarQuery(Querys::INSERTAR_USUARIO,(array)$usuario);
        if($sentencia!="error"){
            $DbHelper->confirmarCambio();
            $json['estado']="registrado";
        }else{
            $json['estado']="error";
        }
        echo json_encode($json);       
    }
    public static function loguearUsuario(Usuario $usuario){
        $DbHelper=new DbHelper();
        $arreglo['email']=$usuario->getEmail();
        $sentencia=$DbHelper->ejecutarQuery(Querys::OBTENER_USUARIO,$arreglo);
        if($sentencia->rowCount() >= 1 ){
            $resultado = $sentencia->fetch();
                if(password_verify($usuario->getContrasena(), $resultado['pass'])){
                    $json['estado']="logueado";
                    $json['correo']=$usuario->getEmail();
                    $json['dni']=$usuario->getDni();
                }else{
                    $json['estado']="Contraseña Erronea";
                }
            }else{
            $json['estado']="Email incorrecto";
            }
        return $json;
    }
}