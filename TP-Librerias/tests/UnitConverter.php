<?php

use UnitConverter\UnitConverter;

class Convertidor
{
    private $converter;

    public function __construct()
    {
        $this->converter = UnitConverter::createBuilder()
            ->addSimpleCalculator()
            ->addDefaultRegistry()
            ->build();
    }

    public function convertir($valor, $desde, $hasta)
    {
        return $this->converter->convert($valor)->from($desde)->to($hasta);
    }
}