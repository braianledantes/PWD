<?php

$dir = 'archivos/';

if ($_FILES['archivo']['error'] <= 0) {
    echo "Nombre: " . $_FILES['archivo']['name'] . "<br>";
    echo "Tipo: " . $_FILES['archivo']['type'] . "<br>";
    echo "Tamaño: " . ($_FILES['archivo']['size'] / 1024) . " kB<br>";
    echo "Carpeta temporal: " . $_FILES['archivo']['tmp_name'] . "<br>";
    // intentamos copiar el archivo al servidor
    if (!copy($_FILES['archivo']['tmp_name'], $dir . $_FILES['archivo']['name'])) {
        echo "Hubo un error al subir el archivo.";
    } else {
        echo "El archivo " . $_FILES['archivo']['name'] . " se ha subido con éxito.";
    }
} else {
    echo "Hubo un error al subir el archivo.";
}