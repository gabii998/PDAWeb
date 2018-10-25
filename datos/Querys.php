<?php
interface Querys{
//Base de datos
const CREAR_BASEDEDATOS="CREATE DATABASE IF NOT EXISTS`PDA` DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci ;";

//Usuarios
const CREAR_TABLA_USUARIO="CREATE TABLE IF NOT EXISTS `Usuarios` (
  `email` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `UsuariosInfo_dni` varchar(8) COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`email`),
  KEY `fk_Usuarios_UsuariosInfo` (`UsuariosInfo_dni`),
  CONSTRAINT `fk_Usuarios_UsuariosInfo` FOREIGN KEY (`UsuariosInfo_dni`) REFERENCES `UsuariosInfo` (`dni`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;";

const OBTENER_USUARIO="SELECT * FROM Usuarios WHERE email=?";

const INSERTAR_USUARIO="INSERT INTO Usuarios (email,pass,UsuariosInfo_dni) VALUES(?,?,?)";

//Perfiles de Usuarios
const CREAR_TABLA_PERFIL_USUARIO="CREATE TABLE IF NOT EXISTS`UsuariosInfo` (
  `dni` varchar(8) NOT NULL,
  `apellido` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `fechaNacimiento` varchar(45) NOT NULL,
  `telefono` varchar(45) NOT NULL,
  PRIMARY KEY (`dni`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;
  ";
const INSERTAR_PERFIL="INSERT INTO UsuariosInfo (nombre,apellido,fechaNacimiento,telefono,dni) VALUES(?,?,?,?,?)";

//Ubicaciones
const CREAR_TABLA_UBICACION="CREATE TABLE IF NOT EXISTS `PDA`.`Ubicacion` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `longitud` VARCHAR(200) NULL,
  `latitud` VARCHAR(200) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci";
const INSERTAR_UBICACION="INSERT INTO `PDA`.`Ubicacion`(id,latitud,longitud)VALUES(?,?,?)";


//Comercios
const CREAR_TABLA_COMERCIOS="CREATE TABLE IF NOT EXISTS `PDA`.`Comercios` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NULL,
  `Usuarios_email` VARCHAR(100) NOT NULL,
  `Ubicacion_id` INT NOT NULL,
  PRIMARY KEY (`id`),
  CONSTRAINT `fk_Comercios_Usuarios1`
    FOREIGN KEY (`Usuarios_email`)
    REFERENCES `PDA`.`Usuarios` (`email`),
  CONSTRAINT `fk_Comercios_Ubicacion1`
    FOREIGN KEY (`Ubicacion_id`)
    REFERENCES `PDA`.`Ubicacion` (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_spanish_ci";
const INSERTAR_COMERCIO="INSERT INTO `PDA`.`Comercios`(nombre,Usuarios_email,Ubicacion_id)VALUES(?,?,?);";

const TRAER_COMERCIOS="";
}