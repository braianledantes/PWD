<?php
include_once '../../utils/funciones.php';
include_once '../../control/Cine.php';

$datos = darDatosSubmitted();
$cine = new Cine();
$edad = $datos['edad'];
$esEstudiante = $datos['esEstudiante'];

$precio = $cine->calcularPrecio($esEstudiante, $edad);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Precio de entrada</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Header -->
    <?php require_once '../estructura/header-accion.php'; ?>
    <div class="contenido d-flex justify-content-center">
        <div class="bg-body-secondary mt-4 border rounded p-3" style="max-width: 600px; min-width:400px;">
            <h2>Resultado:</h2>
            <div class="resultado bg-body-secondary">
                <p>El precio de la entrada es de $<?= $precio ?></p>
            </div>
        </div>
    </div>
</body>

</html>