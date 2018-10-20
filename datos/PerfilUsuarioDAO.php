<?php
include SITE_ROOT."/modelos/PerfilUsuario.php";
include_once "DbHelper.php";

class PerfilUsuarioDAO{
    //Clase que interactúa directamente con la tabla 'UsuariosInfo'

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
          $resultado=mysqli_query($conexion,$operacion) or die ($conexion->error);
          mysqli_close($conexion);
    }

    public function completarPerfil(PerfilUsuario $usuario){
        $this->crearTablaPerfiles();
        $conexion=DbHelper::conectar();
        $dni=$usuario->getDni();
        $apellido=$usuario->getApellido();
        $nombre=$usuario->getNombre();
        $nacimiento=$usuario->getFechaNacimiento();
        $telefono=$usuario->getTelefono();
        
        $operacion="INSERT INTO UsuariosInfo (dni,apellido,nombre,fechaNacimiento,telefono) VALUES(?,?,?,?,?)";
        $sentencia=$conexion->prepare($operacion);
        $sentencia->bind_param('sssss',$dni,$apellido,$nombre,$nacimiento,$telefono);
        if($sentencia->execute()){
            return "registrado";
        }else{
            return "-1";
        }
    }
    public function editarPerfil(){

    }
}