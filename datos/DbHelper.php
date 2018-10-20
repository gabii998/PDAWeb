<?php
//include __DIR__."/../constantes.php";
class DbHelper{
    //Clase que contiene datos en común, necesarios para el correcto funcionamiento de la DB

    public static function conectar(){
        DbHelper::crearBaseDeDatos();
        $conexion=mysqli_connect(DBSERVERNAME,DBUSER,DBPASSWORD,DBNAME);
        return $conexion;
    }
    public static function crearBaseDeDatos(){
        //$helper= new self();
        $conexion=mysqli_connect(DBSERVERNAME,DBUSER,DBPASSWORD) or die ($conexion->error);
        $operacion="CREATE DATABASE IF NOT EXISTS`PDA` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;";
        $resultado=mysqli_query($conexion,$operacion);
        /*$helper->crearTablaUsuarios();
        $helper->crearTablaPerfiles();
        Hay que terminar de integrar esta funciones, por 
        el momento fueron deshabilitadas debido a errores*/
        mysqli_close($conexion);
    }
    public static function crearTablaUsuarios(){
        $conexion=DbHelper::conectar();
        $operacion="CREATE TABLE IF NOT EXISTS `PDA`.`Usuarios` (
            `email` VARCHAR(100) NOT NULL,
            `pass` VARCHAR(50) NOT NULL,
            `UsuariosInfo_dni` VARCHAR(8) NOT NULL,
            PRIMARY KEY (`email`, `UsuariosInfo_dni`),
            INDEX `fk_Usuarios_UsuariosInfo_idx` (`UsuariosInfo_dni` ASC) VISIBLE,
            CONSTRAINT `fk_Usuarios_UsuariosInfo`
              FOREIGN KEY (`UsuariosInfo_dni`)
              REFERENCES `PDA`.`UsuariosInfo` (`dni`)
             )
          ENGINE = InnoDB
          DEFAULT CHARACTER SET = utf8mb4
          COLLATE = utf8mb4_unicode_ci;";
          $resultado=mysqli_query($conexion,$operacion);
          mysqli_close($conexion);
    }
    public function crearTablaPerfiles(){
        $conexion=DbHelper::conectar();
        $operacion="CREATE TABLE IF NOT EXISTS `PDA`.`UsuariosInfo` (
            `dni` VARCHAR(8) NOT NULL,
            `apellido` VARCHAR(45) NOT NULL,
            `nombre` VARCHAR(45) NOT NULL,
            `fechaNacimiento` VARCHAR(45) NOT NULL,
            `telefono` VARCHAR(45) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
            PRIMARY KEY (`dni`))
          ENGINE = InnoDB;
          ";
          $resultado=mysqli_query($conexion,$operacion);
          mysqli_close($conexion);
    }
}