<?php
include_once("Querys.php");
class DbHelper implements Querys{
    //Clase que contiene datos en común, necesarios para el correcto funcionamiento de la DB
    private $conexion;

    public function __construct(){
        $this->crearBaseDeDatos();
        $this->conexion=new PDO("mysql:dbname=".DBNAME.";host=localhost",DBUSER,DBPASSWORD);
       // $this->conexion->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
       //Habilitar la linea de arriba para depurar errores en la db
    }

    public static function conectar(){
        crearBaseDeDatos();
        $conexion=new PDO("mysql:dbname=".DBNAME.";host=localhost",DBUSER,DBPASSWORD);
        return $conexion;
    }
    public function crearBaseDeDatos(){
        $conexion=new PDO("mysql:host=localhost",DBUSER,DBPASSWORD);
        $sentencia=$conexion->prepare(Querys::CREAR_BASEDEDATOS);
        $sentencia->execute();  
    }
    public function obtenerUltimoId(){
        return $this->conexion->lastInsertId();
    }
    public function confirmarCambio(){
        $this->conexion->commit();
    }

    public function ejecutarQuery($operacion,$parametros=null){
        $this->conexion->beginTransaction();
        $sentencia=$this->conexion->prepare($operacion);
        if($parametros){
            $indice=1;//Esto indicara el orden en el que se bindean los valores
            foreach ($parametros as $key => $parametro) {
                $sentencia->bindValue($indice, $parametro);
                $indice++;
            }
        }
        if($sentencia->execute()){
            return $sentencia;
            echo "ok";
        }else{
            return "error";
        }
    }
}