<?php
include_once __DIR__."/../constantes.php";
include  SITE_ROOT.'/datos/ComercioDAO.php';
 class ControladorComercios{
      
      /*public static function obtenerComercios(){
            $dao= new ComercioDAO();
            return $dao->obtener();
      }*/
      public static function servirVista(){
            require SITE_ROOT. '/vistas/Comercio.php';
      }
      public function agregarLugar(){

      }
}
