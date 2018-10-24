<?php
class Ubicacion{
    /*
    Esta clase será utilizada por las alertas y por los comercios.En la base de datos
    tendrá una tabla aparte
    */
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