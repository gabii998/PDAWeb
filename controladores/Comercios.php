<?php
include_once __DIR__."/../constantes.php";
include  SITE_ROOT.'/datos/ComercioDAO.php';
include  SITE_ROOT.'/datos/UbicacionDAO.php';
include_once  SITE_ROOT.'/modelos/Ubicacion.php';
include_once  SITE_ROOT.'/modelos/Comercio.php';
 class ControladorComercios{
      
      /*public static function obtenerComercios(){
            $dao= new ComercioDAO();
            return $dao->obtener();
      }*/
      public static function servirVista(){
            require SITE_ROOT. '/vistas/Comercio.php';
      }
      public static function agregarLugar($parametrosPost){
            $ubicacionDao=new UbicacionDAO();
            //$ubicacion=new Ubicacion(null,$parametrosPost['latitud'],$parametrosPost['longitud']);
            //$id=$ubicacionDao->agregar($ubicacion);
            $comercio=new Comercio($parametrosPost['nombre'],$parametrosPost['email'],$parametrosPost['latitud'],$parametrosPost['longitud']);
            echo ComercioDAO::agregar($comercio);
      }
}
