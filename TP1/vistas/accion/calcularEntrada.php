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
    <title> Precio de entrada </title>
    <link rel="stylesheet" href="../assets/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="contenido">
        <!--<h2>Resultado:</h2>-->
        <div class="resultado" style="background-color: lightyellow;">
            <p>El precio de la entrada es de $<?= $precio ?></p>
        </div>
    </div>
</body>
</html>