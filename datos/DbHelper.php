<?php
class DbHelper{
    public function __construct(){
        
    }

    public static function conectar(){
        $serverName="localhost";
        $serverUser="root";
        $serverPassword="11";
        $serverDbName="PDA";
        $conexion=mysqli_connect($serverName,$serverUser,$serverPassword,$serverDbName);
        return $conexion;
    }
}