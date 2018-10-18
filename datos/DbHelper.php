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
        //$helper= new self();
        $serverName="localhost";
        $serverUser="root";
        $serverPassword="11";
        $serverDbName="PDA";
        $conexion=mysqli_connect($serverName,$serverUser,$serverPassword);
        $operacion="CREATE DATABASE IF NOT EXISTS`PDA` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;";
        $resultado=mysqli_query($conexion,$operacion);
        /*$helper->crearTablaUsuarios();
        $helper->crearTablaPerfiles();
        Hay que terminar de integrar esta funciones, por 
        el momento fueron deshabilitadas debido a errores*/
        mysqli_close($conexion);
    }
    public function crearTablaUsuarios(){
        $conexion=DbHelper::conectar();
        $operacion="CREATE TABLE IF NOT EXISTS `Usuarios` (
            `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
            `pass` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
            `dni` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
            `recoveryHash` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            PRIMARY KEY (`email`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
          $resultado=mysqli_query($conexion,$operacion);
          mysqli_close($conexion);
    }
    public function crearTablaPerfiles(){
        $conexion=DbHelper::conectar();
        $operacion="CREATE TABLE IF NOT EXISTS `UsuariosInfo` (
            `perfDni` varchar(8) NOT NULL,
            `perfNombre` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `perfApellido` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `perfFechaNacimiento` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            `perfTelefono` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            PRIMARY KEY (`perfDni`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
          ";
          $resultado=mysqli_query($conexion,$operacion);
          mysqli_close($conexion);
    }
}