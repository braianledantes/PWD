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
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
    <div class="contenido">
        <h2>Resultado:</h2>
        <div class="resultado">
            <p>El precio de la entrada es de $<?= $precio ?></p>
        </div>
    </div>
</body>
</html>