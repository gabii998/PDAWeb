<?php
include SITE_ROOT."/modelos/Comercio.php";
include_once "DbHelper.php";
include_once "Querys.php";

/* La tabla comercios contendrá los siguientes elementos:
Nombre: Un nombre alfanumérico,
Ubicacion: Será un objeto de tipo ubicación,
Votos: Para que se cuente como un PDA oficial, deberá tener más de 15 votos
*/

class ComercioDAO implements Querys{

    public static function crearTablaComercio(){
        $DbHelper=new DbHelper();
        $sentencia=$DbHelper->ejecutarQuery(Querys::CREAR_TABLA_COMERCIOS);
    }

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


    public static function agregar(Comercio $comercio){
        ComercioDAO::crearTablaComercio();
        $DbHelper=new DbHelper();
        $sentencia=$DbHelper->ejecutarQuery(Querys::INSERTAR_COMERCIO,(array)$comercio);
        if($sentencia != "error"){
            $DbHelper->confirmarCambio();
            return "agregado";
        }else{
            return "error";
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