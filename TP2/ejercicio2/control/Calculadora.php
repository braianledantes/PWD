<?php

class Calculadora
{
    private $valor1;
    private $valor2;
    private $operacion;
    private $resultado;

    public function __construct($datos)
    {
        $this->valor1 = intval($datos['valor1']);
        $this->valor2 = intval($datos['valor2']);
        $this->operacion = $datos['operacion'];
    }

    public function getValor1()
    {
        return $this->valor1;
    }

    public function getValor2()
    {
        return $this->valor2;
    }

    public function getResultado()
    {
        return $this->resultado;
    }

    public function getSimboloOperacion()
    {
        switch ($this->operacion) {
            case 'suma':
                return '+';
            case 'resta':
                return '-';
            case 'multiplicacion':
                return '×';
            default:
                return '?';
        }
    }

    public function calcular()
    {
        switch ($this->operacion) {
            case 'suma':
                $this->resultado = $this->valor1 + $this->valor2;
                break;
            case 'resta':
                $this->resultado = $this->valor1 - $this->valor2;
                break;
            case 'multiplicacion':
                $this->resultado = $this->valor1 * $this->valor2;
                break;
            default:
                $this->resultado = 'Operacion no valida';
                break;
        }
    }
}
