<?php
class Comercio{
    private $nombre;
    private $latitud;
    private $longitud;
    private $descripcion;
    private $sitio;

    public function __construct($nombre,$latitud,$longitud){
        $this->nombre=$nombre;
        $this->latitud=$latitud;
        $this->longitud=$longitud;
    }
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }
    public function setLatitud($latitud){
        $this->latitud=$latitud;
    }
    public function setLongitud($longitud){
        $this->longitud=$longitud;
    }
    public function getNombre(){
        return $this->nombre;
    }
    public function getLatitud(){
        return $this->latitud;
    }
    public function getLongitud(){
        return $this->longitud;
    }
    
}