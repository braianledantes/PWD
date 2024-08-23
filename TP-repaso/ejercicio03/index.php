<?php

$nombre = "Braian";
$apellido = "Ledantes";
$edad = 26;
$direccion = "Calle Falsa 123";

$arr = array(
    "Nombre" => $nombre,
    "Apellido" => $apellido,
    "Edad" => $edad,
    "Dirección" => $direccion
);

// mostrar los datos por pantalla
foreach ($arr as $key => $value) {
    echo "<strong>$key:</strong> $value<br>";
}