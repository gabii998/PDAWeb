<?php
include_once(__DIR__."/../constantes.php");
class ControladorMapa{

    public static function servirVista(){
        if($_SESSION['estado'] == "logueado"){
            require SITE_ROOT.'/vistas/Mapa.php';
        }else{
            $titulo="Mapa";
            $mensaje="Para entrar aquí inicia sesión";
            require SITE_ROOT.'/vistas/Error.php';
        }
    }
}