<?php
// Incluir aqui la definicion de la funcion
function divisores($numero) {
    $divisores = [];
    for ($i = 1; $i <= $numero; $i++) {
        if ($numero % $i == 0) {
            $divisores[] = $i;
        }
    }
    return $divisores;
}

$num = 20;
echo "Los divisores de $num son : <br/>";
foreach (divisores($num) as $divisor) {
    echo "$divisor <br/>";
}

// Completar aqui con la definicion de la funcion saludo()
function saludo() {
    // configura la hora local
    date_default_timezone_set('America/Argentina/Buenos_Aires');
    
    // obtiene la hora actual
    $hora = date("H");

    if ($hora >= "5" && $hora < "13") {
        return "Buenos días";
    } elseif ($hora >= "13" && $hora < "18") {
        return "Buenas tardes";
    } else {
        return "Buenas noches";
    }
}

$nombre ="Braian";
echo "¡" . saludo($nombre) . "!";