<?php
require_once '../Control/PersonaController.php';

$personaController = new PersonaController();

$nroDni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fechaNac = $_POST['fechaNac'];
$telefono = $_POST['telefono'];
$domicilio = $_POST['domicilio'];

$resultado = $personaController->crearPersona($nroDni, $nombre, $apellido, $fechaNac, $telefono, $domicilio);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Persona | TP4</title>
</head>
<body>
    
    <h1>Crear Persona</h1>

    <?php if (isset($resultado['mensaje'])) : ?>
        <p><?= $resultado['mensaje'] ?></p>
    <?php else : ?>
        <p><?= $resultado['error'] ?></p>
    <?php endif; ?>

    <a href="NuevaPersona.php">Volver</a>

</body>
</html>