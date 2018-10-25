<?php
include SITE_ROOT."/modelos/PerfilUsuario.php";
include_once "DbHelper.php";
include_once "Querys.php";

class PerfilUsuarioDAO implements Querys{
    //Clase que interactúa directamente con la tabla 'UsuariosInfo'

    public function crearTablaPerfiles(){
        $DbHelper=new DbHelper();
        $DbHelper->ejecutarQuery(Querys::CREAR_TABLA_PERFIL_USUARIO);
    }

    public function completarPerfil(PerfilUsuario $usuario){
        $DbHelper=new DbHelper();
        $this->crearTablaPerfiles();
        
        $sentencia=$DbHelper->ejecutarQuery(Querys::INSERTAR_PERFIL,(array)$usuario);
        if($sentencia != "error"){
            $DbHelper->confirmarCambio();
            return "registrado";
        }else{
            return "-1";
        }
    }
    public function editarPerfil(){

    }
}