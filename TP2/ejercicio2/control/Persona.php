<?php

class Persona
{
    private $nombre;
    private $apellido;
    private $edad;
    private $direccion;
    private $estudios;
    private $sexo;
    private $deportes;

    public function __construct($datos)
    {
        $this->nombre = $datos['nombre'];
        $this->apellido = $datos['apellido'];
        $this->edad = $datos['edad'];
        $this->direccion = $datos['direccion'];
        $this->estudios = $datos['estudios'];
        $this->sexo = $datos['sexo'];
        $this->deportes = $datos['deportes'];
    }

    public function saludar()
    {
        return "Hola, yo soy $this->nombre $this->apellido, tengo $this->edad años y vivo en $this->direccion";
    }

    public function esMayorDeEdad()
    {
        return $this->edad >= 18;
    }

    public function mostrarEstudiosYSexo()
    {
        return "Nivel de estudios: $this->estudios. Sexo: $this->sexo";
    }

    public function cantidadDeDeportes()
    {
        return count($this->deportes);
    }
}
