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
    <title>Resultado</title>
    <link rel="stylesheet" href="../assets/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="contenido">
        <!--<h2>Resultado:</h2>-->
        <div class="resultado">
            <p>El número ingresado es <span style="color:brown;font-weight:bold;"> <?= $mensaje ?> </span></p>
        </div>
    </div>
</body>

</html>