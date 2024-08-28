<?php
require_once '../../utils/funciones.php';
require_once '../../control/Numero.php';

$datos = darDatosSubmitted();

$numero = new Numero();
$mensaje = $numero->devolverSigno($datos);
?>


<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número mágico</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center mt-3">
        <div class="p-3 border rounded bg-body-secondary" style="width: 600px; max-width: 600px;">
            <h2>Resultado:</h2>
            <div class="resultado mt-4">
                <p>El número ingresado es <?= $mensaje ?></p>
            </div>
        </div>
    </div>
</body>

</html>