<?php
include_once __DIR__."/../constantes.php";
include  SITE_ROOT.'/datos/ComercioDAO.php';
include  SITE_ROOT.'/datos/UbicacionDAO.php';
include_once  SITE_ROOT.'/modelos/Ubicacion.php';
include_once  SITE_ROOT.'/modelos/Comercio.php';
 class ControladorComercios{
      
      public static function servirVista(){
            require SITE_ROOT. '/vistas/Comercio.php';
      }
      public static function agregarLugar($parametrosPost){
            $comercio=new Comercio($parametrosPost['nombre'],$parametrosPost['email'],$parametrosPost['latitud'],$parametrosPost['longitud']);
            echo ComercioDAO::agregar($comercio);
      }
      public static function traerLugares(){
            echo json_encode(ComercioDAO::obtenerTodos());
      }
      public static function traerLugar($parametros){
            echo json_encode(ComercioDAO::obtenerComercio($parametros['id']));

      }
}
