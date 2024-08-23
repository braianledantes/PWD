<?php

class Cine
{
    public function calcularPrecio($esEstudiante, $edad)
    {
        $precio = 300;
        if ($esEstudiante || $edad < 12) {
            $precio = 160;
        }
        if ($esEstudiante && $edad >= 12) {
            $precio = 180;
        }
        return $precio;
    }
}
