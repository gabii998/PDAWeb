<?php
include_once("Querys.php");
class DbHelper implements Querys{
    //Clase que contiene datos en común, necesarios para el correcto funcionamiento de la DB

    public static function conectar(){
        DbHelper::crearBaseDeDatos();
        $conexion=new PDO("mysql:dbname=".DBNAME.";host=localhost",DBUSER,DBPASSWORD);
        return $conexion;
    }
    public static function crearBaseDeDatos(){
        $conexion=new PDO("mysql:host=localhost",DBUSER,DBPASSWORD);
        $sentencia=$conexion->prepare(Querys::CREAR_BASEDEDATOS);
        $sentencia->execute();  
    }

    public static function ejecutarQuery($operacion,$parametros=null){
        $conexion=DbHelper::conectar();
        $sentencia=$conexion->prepare($operacion);
        if($parametros){
            $indice=1;//Esto indicara el orden en el que se bindean los valores
            foreach ($parametros as $key => $parametro) {
                $sentencia->bindValue($indice, $parametro);
                $indice++;
            }
        }
        if($sentencia->execute()){
            return $sentencia;
        }else{
            return "error";
        }
    }
}