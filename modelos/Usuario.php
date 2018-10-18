<?php
class Usuario{
    //Modelo que contiene solo los datos críticos para la sesión
private $email;
private $contrasena;


    public function __construct($email,$contrasena){
        $this->email=$email;
        $this->contrasena=$contrasena;
    }
    
    public function getEmail(){
    return $this->email;
    }
    public function getContrasena(){
    return $this->contrasena;
    }
    
    public function setEmail($email){
    $this->email=$email;
    }
    public function setContrasena($contrasena){
    $this->contrasena=$contrasena;
    }
    
}