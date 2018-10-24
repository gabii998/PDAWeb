<?php
interface Querys{
const CREAR_BASEDEDATOS="CREATE DATABASE IF NOT EXISTS`PDA` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;";
const CREAR_TABLA_USUARIO="CREATE TABLE IF NOT EXISTS `PDA`.`Usuarios` (
    `email` VARCHAR(100) NOT NULL,
    `pass` VARCHAR(128) NOT NULL,
    `UsuariosInfo_dni` VARCHAR(8) NOT NULL,
    PRIMARY KEY (`email`, `UsuariosInfo_dni`),
    CONSTRAINT `fk_Usuarios_UsuariosInfo`
      FOREIGN KEY (`UsuariosInfo_dni`)
      REFERENCES `PDA`.`UsuariosInfo` (`dni`),
     CONSTRAINT `uq_Usuarios_email` UNIQUE (`email`),
     CONSTRAINT `uq_Usuarios_dni` UNIQUE (`UsuariosInfo_dni`)
     )
  ENGINE = InnoDB;";
const OBTENER_USUARIO="SELECT * FROM Usuarios WHERE email=?";
const INSERTAR_USUARIO="INSERT INTO Usuarios (email,pass,UsuariosInfo_dni) VALUES(?,?,?)";
const CREAR_TABLA_PERFIL_USUARIO="CREATE TABLE IF NOT EXISTS `PDA`.`UsuariosInfo` (
    `dni` VARCHAR(8) NOT NULL,
    `apellido` VARCHAR(45) NOT NULL,
    `nombre` VARCHAR(45) NOT NULL,
    `fechaNacimiento` VARCHAR(45) NOT NULL,
    `telefono` VARCHAR(45) CHARACTER SET 'utf8mb4' COLLATE 'utf8mb4_unicode_ci' NOT NULL,
    PRIMARY KEY (`dni`))
  ENGINE = InnoDB;
  ";
const INSERTAR_PERFIL="INSERT INTO UsuariosInfo (nombre,apellido,fechaNacimiento,telefono,dni) VALUES(?,?,?,?,?)";
}