<?php
class Comercio{
    private $nombre;
    private $emailDueno;
    private $latitud;
    private $longitud;

    function __construct($nombre, $emailDueno,  $latitud, $longitud) {
        $this->nombre = $nombre;
        $this->emailDueno = $emailDueno;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
    }
    function getNombre() {
        return $this->nombre;
    }

    function getEmailDueno() {
        return $this->emailDueno;
    }

    function getIdUbicacion() {
        return $this->idUbicacion;
    }

    function getLatitud() {
        return $this->latitud;
    }

    function getLongitud() {
        return $this->longitud;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEmailDueno($emailDueno) {
        $this->emailDueno = $emailDueno;
    }

    function setIdUbicacion($idUbicacion) {
        $this->idUbicacion = $idUbicacion;
    }

    function setLatitud($latitud) {
        $this->latitud = $latitud;
    }

    function setLongitud($longitud) {
        $this->longitud = $longitud;
    }



}