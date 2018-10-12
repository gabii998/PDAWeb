<?php
class Usuario{
private $email;
private $contrasena;
private $dni;

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
    public function getDni(){
    return $this->dni;
    }
    public function setNombre(){
    $this->nombre=$nombre;
    }
    public function setContrasena(){
    $this->contrasena=$contrasena;
    }
    public function setDni($dni){
    $this->dni=$dni;
    }
}