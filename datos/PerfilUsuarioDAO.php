<?php
include SITE_ROOT."/modelos/PerfilUsuario.php";
include_once "DbHelper.php";

class PerfilUsuarioDAO{
    //Clase que interactúa directamente con la tabla 'UsuariosInfo'

    public function crearTablaPerfiles(){
        $sentencia=DbHelper::ejecutarQuery(Querys::CREAR_TABLA_PERFIL_USUARIO);
    }

    public function completarPerfil(PerfilUsuario $usuario){
        $this->crearTablaPerfiles();
        $sentencia=DbHelper::ejecutarQuery(Querys::INSERTAR_PERFIL,(array)$usuario);
        if($sentencia != "error"){
            return "registrado";
        }else{
            return "-1";
        }
    }
    public function editarPerfil(){

    }
}