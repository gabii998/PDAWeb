<?php
include SITE_ROOT."/modelos/Usuario.php";
include_once "DbHelper.php";

class UsuarioDAO{
    //Clase que interactúa directamente con la tabla 'Usuarios'
    private $tableName="Usuarios";
   
    public function agregarUsuario(Usuario $usuario){
        $json=array();
        $conexion=DbHelper::conectar();
        $email=$usuario->getEmail();
        $contrasena=$usuario->getContrasena();
        $contrasena=hash('sha512',$contrasena);
        
        $operacion="INSERT INTO Usuarios (email,pass) VALUES(?,?)";
        $sentencia=$conexion->prepare($operacion);
        $sentencia->bind_param("ss",$email,$contrasena);
        if($sentencia->execute()){
            $json['estado']="registrado";
        }else{
            $json['estado']="error";
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
        
        //$resultado=$conexion->query($consulta);
        return $json;
        mysqli_close($conexion);
    }
}