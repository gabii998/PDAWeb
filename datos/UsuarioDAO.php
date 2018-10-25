<?php
include SITE_ROOT."/modelos/Usuario.php";
include_once "DbHelper.php";
include_once "Querys.php";

class UsuarioDAO implements Querys{
    //Clase que interactúa directamente con la tabla 'Usuarios'

    public function crearTablaUsuarios(){
        $DbHelper=new DbHelper();
        $DbHelper->ejecutarQuery(Querys::CREAR_TABLA_USUARIO);
    }
   
    public function agregarUsuario(Usuario $usuario){
        $this->crearTablaUsuarios();
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
    public function loguearUsuario(Usuario $usuario){
        $DbHelper=new DbHelper();
        $arreglo['email']=$usuario->getEmail();
        $sentencia=$DbHelper->ejecutarQuery(Querys::OBTENER_USUARIO,$arreglo);
        if($sentencia != "error"){
            $resultado = $sentencia->fetch();
                if(password_verify($usuario->getContrasena(), $resultado['pass'])){
                    $json['estado']="logueado";
                    $json['correo']=$usuario->getEmail();
                    $json['dni']=$usuario->getDni();
                }else{
                    $json['estado']="contrasenaErronea";
                }
            }else{
            $json['estado']="emailIncorrecto";
            }
        return $json;
    }
}