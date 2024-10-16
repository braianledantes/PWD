<?php
/**
 * Clase que representa una entidad de persona en la base de datos
 */
class Persona {
    private $NroDni;
    private $apellido;
    private $nombre;
    private $fechaNac;
    private $telefono;
    private $domicilio;

    public function __construct($NroDni, $apellido, $nombre, $fechaNac, $telefono, $domicilio) {
        $this->NroDni = $NroDni;
        $this->apellido = $apellido;
        $this->nombre = $nombre;
        $this->fechaNac = $fechaNac;
        $this->telefono = $telefono;
        $this->domicilio = $domicilio;
    }

    public function getNroDni() {
        return $this->NroDni;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getFechaNac() {
        return $this->fechaNac;
    }

    public function getTelefono() {
        return $this->telefono;
    }

    public function getDomicilio() {
        return $this->domicilio;
    }
}
