<?php
//include __DIR__."/../constantes.php";
include SITE_ROOT."/modelos/Comercio.php";
include "DbHelper.php";

class ComercioDAO{
    private $tableName="Comercios";

    public function obtener(){
        //No se usa una sentencia preparada debido a que no utilizamos parámetros
        $json=array();
        $db=new DbHelper();
        $conexion=$db->conectar();
        $consulta="SELECT nombre,latitud,longitud from ".$this->tableName;
        $resultado=mysqli_query($conexion,$consulta);

        while($fila=mysqli_fetch_assoc($resultado)){
            $json['Comercios'][]=$fila;
        }   
        mysqli_close($conexion);
        echo json_encode($json);
    }


    public function agregar(Comercio $comercio){
        $json=array();
        $db=new DbHelper();
        $conexion=$db->conectar();
        /*
          $correo=$this->usuario->getCorreo();
          $password=$this->usuario->getPassword();
          $tipo=$this->usuario->getTipo();
          $nombre=$this->usuario->getNombre();
          $apellido=$this->usuario->getApellido();*/
          $sentenciaPreparada="INSERT INTO ".$this->tableName." (nombre,latitud,longitud) VALUES(?,?,?);";
          $query=$conexion->prepare($sentenciaPreparada);
          $query->bind_param("sss" , $comercio->getNombre(), $comercio->getLatitud() ,$comercio->getLongitud() );
          if ($query->execute()) {
               //echo"1";
               $json['estado']="1";
               return $json;
          }else{
               //echo"-1";
               $json['estado']="-1";
               return $json;
          }
    }


    public function obtenerSugerenciasComercios(){
        //Webservice que es consumido por la app mobile cuando se busca algún lugar
        $db=new DbHelper();
        $conexion=$db->conectar();
        $consulta="SELECT * FROM  Comercios WHERE MATCH(nombre) AGAINST  ('".$nombre."')";
        $resultado=mysqli_query($conexion,$consulta);

        while($fila=mysqli_fetch_assoc($resultado)){
            $json['Comercios'][]=$fila;
        }
        mysqli_close($conexion);
        echo json_encode($json);
    }


    public function eliminarLugar(){

    }
}