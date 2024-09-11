<?php
require_once '../Control/PersonaController.php';

$personaController = new PersonaController();

$dni = $_GET['dni'];

$resultado = $personaController->buscarPersona($dni);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Persona | TP4</title>
</head>

<body>

    <h1>Buscar Persona</h1>

    <?php if (isset($resultado['error'])) : ?>
        <p><?= $resultado['error'] ?></p>
    <?php else : ?>
        <form action="./ActualizarDatosPersona.php" method="post">
            <input type="hidden" name="dni" value="<?= $resultado['persona']->getNroDni() ?>">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" value="<?= $resultado['persona']->getNombre() ?>" required>
            <br>
            <label for="apellido">Apellido:</label>
            <input type="text" name="apellido" id="apellido" value="<?= $resultado['persona']->getApellido() ?>" required>
            <br>
            <label for="fechaNac">Fecha de Nacimiento:</label>
            <input type="date" name="fechaNac" id="fechaNac" value="<?= $resultado['persona']->getFechaNac() ?>" required>
            <br>
            <label for="telefono">Teléfono:</label>
            <input type="text" name="telefono" id="telefono" value="<?= $resultado['persona']->getTelefono() ?>" required>
            <br>
            <label for="domicilio">Domicilio:</label>
            <input type="text" name="domicilio" id="domicilio" value="<?= $resultado['persona']->getDomicilio() ?>" required>
            <br>
            <button type="submit">Actualizar</button>
        </form>
    <?php endif; ?>

    <a href="VerPersonas.php">Volver</a>

</body>

</html>