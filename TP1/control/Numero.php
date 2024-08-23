<?php

class Numero
{
    public function devolverSigno($info)
    {
        $mensaje = "incorrecto";

        $numero = $info['numero'];

        if ($numero > 0) {
            $mensaje = "positivo";
        } else if ($numero < 0) {
            $mensaje = "negativo";
        } else if ($numero == 0) {
            $mensaje = "cero";
        }

        return $mensaje;
    }
}
