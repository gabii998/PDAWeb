<?php
class PerfilUsuario{
    //Este modelo es para todos los datos del usuario que no sean críticos para la sesión
    private $nombre;
    private $apellido;
    private $fechaNacimiento;
    private $telefono;
    private $dni;

    public function __construct($nombre,$apellido,$fechaNacimiento,$telefono,$dni){
        $this->nombre=$nombre;
        $this->apellido=$apellido;
        $this->fechaNacimiento=$fechaNacimiento;
        $this->telefono=$telefono;
        $this->dni=$dni;
    }

    public function getCorreo(){
        return $this->correo;
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
    public function getDni(){
        return $this->dni;
    }
    public function setCorreo($correo){
        $this->correo=$correo;
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
    public function setDNi($dni){
        $this->dni=$dni;
    }
}