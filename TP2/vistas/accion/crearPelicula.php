<?php

require_once '../../control/Peliculas.php';

$pelicula = new Pelicula();

$titulo = $_POST['titulo'] ?? '';
$actores = $_POST['actores'] ?? '';
$director = $_POST['director'] ?? '';
$guion = $_POST['guion'] ?? '';
$produccion = $_POST['produccion'] ?? '';
$anio = $_POST['anio'] ?? '';
$nacionalidad = $_POST['nacionalidad'] ?? '';
$genero = $_POST['genero'] ?? '';
$duracion = $_POST['duracion'] ?? '';
$edad = $_POST['edad'] ?? '';

$resultado = $pelicula->crearPelicula($titulo, $actores, $director, $guion, $produccion, $anio, $nacionalidad, $genero, $duracion, $edad);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 | TP2</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Header -->
    <?php require_once '../estructura/header-accion.php'; ?>
    <!-- Content -->
    <div class="container mt-4">
        <div class="alert alert-success" role="alert">
            <h2 class="alert-heading mb-4">La película introducida es</h2>
            <p>
                <?php foreach ($resultado as $key => $value) : ?>
                    <strong><?= $key ?></strong>: <?= $value ?><br>
                <?php endforeach; ?>
            </p>
        </div>
    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>