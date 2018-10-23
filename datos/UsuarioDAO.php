<?php
include SITE_ROOT."/modelos/Usuario.php";
include_once "DbHelper.php";

class UsuarioDAO{
    //Clase que interactúa directamente con la tabla 'Usuarios'
    private $tableName="Usuarios";

    public function crearTablaUsuarios(){
        $conexion=DbHelper::conectar();
        $operacion="CREATE TABLE IF NOT EXISTS `PDA`.`Usuarios` (
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
          $resultado=mysqli_query($conexion,$operacion) or die ($conexion->error);
          mysqli_close($conexion);
    }
   
    public function agregarUsuario(Usuario $usuario){
        $this->crearTablaUsuarios();
        $json=array();
        $conexion=DbHelper::conectar();
        $email=$usuario->getEmail();
        $contrasena=$usuario->getContrasena();
        $dni=$usuario->getDni();
        $contrasena= password_hash($contrasena, PASSWORD_ARGON2I);       
         //  $contrasena=hash('sha512',$contrasena);
       
        $operacion="INSERT INTO Usuarios (email,pass,UsuariosInfo_dni) VALUES(?,?,?)";
        $sentencia=$conexion->prepare($operacion);
        $sentencia->bind_param("sss",$email,$contrasena,$dni);
        if($sentencia->execute()){
            $json['estado']="registrado";
        }else{
            $json['estado']=$conexion->error;
            alert("error");
            //die ($conexion->error);
        }
        echo json_encode($json);       
    }
    public function loguearUsuario(Usuario $usuario){
        $json=array();
        $email=$usuario->getEmail();
        $password=$usuario->getContrasena();
        $conexion=DbHelper::conectar();
        //$consulta="SELECT * FROM ".$this->tableName." WHERE email='".$email."' ";
        $consulta="SELECT * FROM Usuarios WHERE email=?";
        $sentencia=$conexion->prepare($consulta);
        $sentencia->bind_param("s",$email);
        if($sentencia->execute()){
            $resultado = $sentencia->get_result();
                $fila=$resultado->fetch_assoc();
                if(password_verify($password, $fila['pass'])){
                    $json['estado']="logueado";
                    $json['correo']=$email;
                }else{
                    $json['estado']="contrasenaErronea";
                    
                }
            }else{
            //echo"Usuario no existente";
            $json['estado']="emailIncorrecto";
            }
        
        //$resultado=$conexion->query($consulta);
        return $json;
        mysqli_close($conexion);
    }
}