<?php
class PerfilUsuario{
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $telefono;

    public function __construct($nombre,$apellido,$fechaNacimiento,$telefono){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->fechaNacimiento=$fechaNacimiento;
        $this->telefono=$telefono;
    }

    public function getNombre(){
        return $this->nombre;
    }
    public function getApellido(){
        return $this->apellido;
    }
    public function getFechaNacimiento(){
        return $this->fechaNacimiento;
    }

    public function getTelefono(){
        return $this->telefono;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }
    public function setFechaNacimiento($fechaNacimiento){
        $this->fechaNacimiento=$fechaNacimiento;
    }
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }
}