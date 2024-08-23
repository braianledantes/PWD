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
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <div class="contenido">
        <h2>Resultado:</h2>
        <div class="resultado">
            <p>El número ingresado es <?= $mensaje ?></p>
        </div>
    </div>
</body>

</html>