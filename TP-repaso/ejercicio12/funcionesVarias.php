<?php

function darMes($numero)
{
    $meses = [
        "Enero",
        "Febrero",
        "Marzo",
        "Abril",
        "Mayo",
        "Junio",
        "Julio",
        "Agosto",
        "Septiembre",
        "Octubre",
        "Noviembre",
        "Diciembre"
    ];
    return $meses[$numero - 1];
}

function formatearFecha($fecha)
{
    $fecha = explode("/", $fecha);
    return $fecha[2] . "-" . $fecha[1] . "-" . $fecha[0];
}

function aplicarImpuesto($monto, $impuesto = 21)
{
    return $monto + ($monto * $impuesto / 100);
}

function pesosADolares($importe, $cotizacion)
{
    if ($cotizacion == 0) {
        return "La cotización no puede ser 0";
    }
    $dolares = $importe / $cotizacion;

    return "La cantidad de $importe $ equivalen a $dolares u\$s";
}

function redondear($numero)
{
    return round($numero);
}

function reemplazarPuntoPorComa($numero)
{
    return str_replace(".", ",", $numero);
}

function promedio($array) {
    $suma = 0;
    foreach ($array as $elemento) {
        $suma += $elemento;
    }
    return $suma / count($array);
}