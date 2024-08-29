<?php
include_once '../../utils/funciones.php';
include_once '../../control/Persona.php';

$datos = darDatosSubmitted();
$persona = new Persona($datos);

$saludo = $persona->saludar();
$esMayorDeEdad = $persona->esMayorDeEdad();
$estudiosYSexo = $persona->mostrarEstudiosYSexo();
$cantidadDeDeportes = $persona->cantidadDeDeportes();

?>

<!DOCTYPE html>
<html lang="e2">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Header -->
    <?php require_once '../estructura/header-accion.php'; ?>
    <div class="container d-flex justify-content-center mt-3">
        <div class="p-3 border rounded bg-body-secondary" style="width: 600px; max-width: 600px;">
            <h2>Resultado:</h2>
            <div class="resultado mt-4">
                <p><?= $saludo ?></p>
                <p><?= $esMayorDeEdad ? 'Es mayor de edad' : 'No es mayor de edad' ?></p>
                <p><?= $estudiosYSexo ?></p>
                <p>Cantidad de deportes: <?= $cantidadDeDeportes ?></p>
            </div>
        </div>
    </div>
</body>

</html>