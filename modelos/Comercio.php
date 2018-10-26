<?php
class Comercio{
    private $nombre;
    private $emailDueno;
    private $latitud;
    private $longitud;
    private $paginaWeb;
    private $descripcion;

    function __construct($nombre, $emailDueno,  $latitud, $longitud,$paginaWeb,$descripcion) {
        $this->nombre = $nombre;
        $this->emailDueno = $emailDueno;
        $this->latitud = $latitud;
        $this->longitud = $longitud;
        $this->paginaWeb=$paginaWeb;
        $this->descripcion=$descripcion;
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