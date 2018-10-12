<?php
//Ubicaciones enviadas por los usuarios en forma de alerta
class Ubicacion{
    private $id;
    private $latitud;
    private $longitud;

    public function __construct($id,$latitud,$longitud){
        $this->id=$id;
        $this->latitud=$latitud;
        $this->longitud=$longitud;
    }
    public function setId($id){
        $this->id=$id;
    }
    public function setLatitud($latitud){
        $this->latitud=$latitud;
    }
    public function setLongitud($longitud){
        $this->longitud=$longitud;
    }
    public function getId(){
        return $this->id;
    }
    public function getLatitud(){
        return $this->latitud;
    }
    public function getLongitud(){
        return $this->longitud;
    }

}