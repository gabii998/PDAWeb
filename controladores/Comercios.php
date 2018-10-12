<?php
include __DIR__."/../constantes.php";
include  SITE_ROOT.'/datos/ComercioDAO.php';
 class ControladorComercios{
      
      public static function obtenerComercios(){
            $dao= new ComercioDAO();
            return $dao->obtener();
      }
      public function agregarLugar(){

      }
}
