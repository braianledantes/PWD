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
    <title>Datos de Usuario</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include_once '../estructura/header-accion.php'; ?>
    <div class="contenido">
        <!--<h2>Resultado:</h2>-->
        <div class="resultado">
            <p><?= $saludo ?></p>
            <hr>
            <p><?= $esMayorDeEdad ? 'Es mayor de edad' : 'No es mayor de edad' ?></p>
            <p><?= $estudiosYSexo ?></p>
            <p>Cantidad de deportes: <?= $cantidadDeDeportes ?></p>
        </div>
    </div>
</body>

</html>