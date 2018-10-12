<?php
require 'vendor/autoload.php';
use Firebase\JWT\JWT;
//DB
$serverName="localhost";
$serverUser="root";
$serverPassword="";
$serverDbName="PDA";
$tableName="Usuarios";
//Operaciones SQL
$conexion=mysqli_connect($serverName,$serverUser,$serverPassword,$serverDbName);
if($conn->connect_error){
    echo"Error en la conexion";
    die("La conexion falló:".$conn->connect_error);
}
//Datos tomados
$consulta="SELECT * FROM ".$tableName." WHERE email='".$email."' ";
$resultado=$conexion->query($consulta);

if($resultado->num_rows >0){
    $fila=mysqli_fetch_assoc($resultado);
    $passHash=hash('sha512',$password);
    if($fila['pass'] == $passHash){
        echo"Logueado";
    }else{
        echo"Contraseña erronea";
    }
}else{
    //echo"Usuario no existente";
    echo $resultado->num_rows;
}
mysqli_close($conexion);

function crearToken($correo){
    $clave="sder323wetergsef";
    $time=time();

    $token=array(
        'tiempo'=>$time,
        'data'=>[
            'email'=> $correo
        ]
    );
    $jwt=JWT::encode($token,$clave);
    $jwtDecoded=JWT::decode($jwt,$clave,array('HS256'));
    echo $jwt;
    echo "<br/>";
    var_dump($jwtDecoded);
}
