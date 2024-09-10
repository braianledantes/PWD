<?php
/**
 * Clase que representa una entidad de auto en la base de datos
 */
class Auto {
    private $patente;
    private $marca;
    private $modelo;
    private $dniDuenio;

    public function __construct($patente, $marca, $modelo, $dniDuenio) {
        $this->patente = $patente;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->dniDuenio = $dniDuenio;
    }

    public function getPatente() {
        return $this->patente;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }

    public function getDniDuenio() {
        return $this->dniDuenio;
    }	
}