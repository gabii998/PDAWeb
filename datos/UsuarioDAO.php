<?php
include SITE_ROOT."/modelos/Usuario.php";
include_once "DbHelper.php";

class UsuarioDAO{
    private $tableName="Usuarios";

    public function crearTabla(){
        $conexion=DbHelper::conectar();
        $operacion="CREATE TABLE IF NOT EXISTS `Usuarios` (
            `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
            `pass` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
            `dni` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
            `recoveryHash` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
            PRIMARY KEY (`email`)
          ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
          $resultado=mysqli_query($conexion,$operacion);
    }
   
    public function agregarUsuario(Usuario $usuario){
        $conexion=DbHelper::conectar();
        $this->crearTabla();
        $email=$usuario->getEmail();
        $contrasena=$usuario->getContrasena();
        $contrasena=hash('sha512',$contrasena);
        $dni=$usuario->getDni();
        $operacion="INSERT INTO Usuarios (email,pass,dni) VALUES(?,?,?)";
        $sentencia=$conexion->prepare($operacion);
        $sentencia->bind_param("sss",$email,$contrasena,$dni);
        if($sentencia->execute()){
            echo"registrado";
        }else{
            echo"-1";
        }       
    }
    public function loguearUsuario(Usuario $usuario){
        $json=array();
        $email=$usuario->getEmail();
        $password=$usuario->getContrasena();
        
        $conexion=DbHelper::conectar();
        $consulta="SELECT * FROM ".$this->tableName." WHERE email='".$email."' ";
        $resultado=$conexion->query($consulta);

        if($resultado->num_rows >0){
            $fila=mysqli_fetch_assoc($resultado);
            $passHash=hash('sha512',$password);
            if($fila['pass'] == $passHash){
                $json['estado']="logueado";
                $json['correo']=$email;
            }else{
                $json['estado']="contrasenaErronea";
                
            }
        }else{
        //echo"Usuario no existente";
        $json['estado']="emailIncorrecto";
        }
        return $json;
        mysqli_close($conexion);
    }
}