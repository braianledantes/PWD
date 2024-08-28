<?php
require_once '../../utils/funciones.php';
require_once '../../control/Archivo.php';
require_once '../../control/Peliculas.php';

$data = data_submitted();

$archivo = new Archivo($data);
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

$urlImagen = $archivo->subirArchivo();

$resultado = $pelicula->crearPelicula(
    $titulo,
    $actores,
    $director,
    $guion,
    $produccion,
    $anio,
    $nacionalidad,
    $genero,
    $duracion,
    $edad,
    $urlImagen
);

// eliminina el archivo de data
unset($data['archivo']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 | Ejercicio 3 | Accion</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header -->
    <?php include_once '../estructura/header-accion.php'; ?>
    <!-- Content -->
    <div class="container mt-4">
        <div class="alert alert-success" role="alert">
            <h2 class="alert-heading mb-4">La película introducida es</h2>
            <p>
                <?php foreach ($data as $key => $value) : ?>
                    <strong><?= $key ?></strong>: <?= $value ?><br>
                <?php endforeach; ?>
            </p>
            <img src="<?= $urlImagen ?>" width="200">
        </div>
    </div>

</body>

</html>