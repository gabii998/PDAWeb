<?php
//include SERVER."/modelos/Ubicacion.php";
include_once "DbHelper.php";
include_once "Querys.php";

class UbicacionDAO implements Querys{
    

    public function crearTablaUbicacion(){
        $DbHelper=new DbHelper();
        $sentencia=$DbHelper->ejecutarQuery(Querys::CREAR_TABLA_UBICACION);
    }

    public function agregar(Ubicacion $ubicacion){
        $this->crearTablaUbicacion();
        $DbHelper=new DbHelper();
        $sentencia=$DbHelper->ejecutarQuery(Querys::INSERTAR_UBICACION,(array)$ubicacion);
        if($sentencia != "error"){
            $id= $DbHelper->obtenerUltimoId();
            $DbHelper->confirmarCambio();
            return $id;
        }else{
            return "error";
        }
       /* $db=new DbHelper();
        $conexion=$db->conectar();
        $id=$ubicacion->getId();
        $latitud=$ubicacion->getLatitud();
        $longitud=$ubicacion->getLongitud();
        $operacion="INSERT INTO Ubicaciones (id,latitud,longitud) VALUES(?,?,?)";
        $sentencia=$conexion->prepare($operacion);
        $sentencia->bind_param("sss",$id,$latitud,$longitud);
        if($sentencia->execute()){
            echo $id;
        }else{
            echo"Error";
        }*/
    }
    private function obtener($id){
        $db=new DbHelper();
        $conexion=$db->conectar();
        $json=array();
        $operacion="SELECT * FROM  Ubicaciones WHERE id=?";
        $sentencia=$conexion->prepare($operacion);
        $sentencia->bind_param("s",$id);
        $sentencia->execute();
        $resultado = $sentencia->get_result();

        while ($fila = mysqli_fetch_assoc($resultado)) {
            $json['Lugares'][]=$fila;
        }
        
        mysqli_close($conexion);
        echo json_encode($json);
    }
}