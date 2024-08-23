<?php

// Crar un programa en php en el que se genereon un array bidemensional
// asociativo que contenga los para cada dia de la semana
// de la materia que cursan junto con la carga horaria
// de la misma. Luego recorrer el array usando una estructura
// foreach que muestre por pantalla la informacion contenida.

$semana = [
    "martes" => [
        "materia" => "Diseño Grafico",
        "horas" => 4
    ],
    "jueves" => [
        "materia" => "PWD",
        "horas" => 3
    ],
    "viernes" => [
        "materia" => "PWD",
        "horas" => 2
    ]
];

foreach ($semana as $dia => $materia) {
    echo "Dia: $dia <br>";
    echo "Materia: " . $materia["materia"] . "<br>";
    echo "Horas: " . $materia["horas"] . "<br>";
    echo "<br>";
}