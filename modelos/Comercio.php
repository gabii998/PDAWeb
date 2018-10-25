<?php
class Comercio{
    private $nombre;
    private $emailDueno;
    private $idUbicacion;

    function __construct($nombre, $emailDueno, $idUbicacion) {
        $this->nombre = $nombre;
        $this->emailDueno = $emailDueno;
        $this->idUbicacion = $idUbicacion;
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

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEmailDueno($emailDueno) {
        $this->emailDueno = $emailDueno;
    }

    function setIdUbicacion($idUbicacion) {
        $this->idUbicacion = $idUbicacion;
    }    
}