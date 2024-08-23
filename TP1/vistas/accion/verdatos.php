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
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>
    <div class="contenido">
        <h2>Resultado:</h2>
        <div class="resultado">
            <p><?= $saludo ?></p>
            <p><?= $esMayorDeEdad ? 'Es mayor de edad' : 'No es mayor de edad' ?></p>
            <p><?= $estudiosYSexo ?></p>
            <p>Cantidad de deportes: <?= $cantidadDeDeportes ?></p>
        </div>
    </div>
</body>

</html>