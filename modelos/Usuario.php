<?php
class Usuario{
private $email;
private $contrasena;
private $dni;


    public function __construct($email,$contrasena){
        $this->email=$email;
        $this->contrasena=$contrasena;
    }
    public function constructorRegistro($email,$contrasena,$dn){
        $this->email=$email;
        $this->contrasena=$contrasena;
        $this->dni=$dni;
    }
    
    public function getEmail(){
    return $this->email;
    }
    public function getContrasena(){
    return $this->contrasena;
    }
    public function getDni(){
    return $this->dni;
    }
    
    public function setEmail($email){
    $this->email=$email;
    }
    public function setContrasena($contrasena){
    $this->contrasena=$contrasena;
    }
    public function setDni($dni){
    $this->dni=$dni;
    }
    
}