<?php
require_once '../Control/PersonaController.php';

$personaController = new PersonaController();

$dni = $_POST['dni'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$fechaNac = $_POST['fechaNac'];
$telefono = $_POST['telefono'];
$domicilio = $_POST['domicilio'];

$resultado = $personaController->actualizarPersona($dni, $nombre, $apellido, $fechaNac, $telefono, $domicilio);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Persona | TP4</title>
</head>

<body>

    <h1>Actualizar Persona</h1>

    <?php if (isset($resultado['error'])) : ?>
        <p><?= $resultado['error'] ?></p>
    <?php else : ?>
        <p><?= $resultado['mensaje'] ?></p>
    <?php endif; ?>

    <a href="listaPersonas.php">Volver</a>

</body>

</html>