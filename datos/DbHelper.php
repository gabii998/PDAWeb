<?php
class DbHelper{
    public function __construct(){
        
    }

    public static function conectar(){
        DbHelper::crearBaseDeDatos();
        $serverName="localhost";
        $serverUser="root";
        $serverPassword="11";
        $serverDbName="PDA";
        $conexion=mysqli_connect($serverName,$serverUser,$serverPassword,$serverDbName);
        return $conexion;
    }
    public static function crearBaseDeDatos(){
        $serverName="localhost";
        $serverUser="root";
        $serverPassword="11";
        $serverDbName="PDA";
        $conexion=mysqli_connect($serverName,$serverUser,$serverPassword);
        $operacion="CREATE DATABASE IF NOT EXISTS`PDA` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;";
        $resultado=mysqli_query($conexion,$operacion);
    }
}