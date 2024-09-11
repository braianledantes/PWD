<?php
require_once '../Control/AutoController.php';

$autoController = new AutoController();

$patente = $_POST['patente'];
$marca = $_POST['marca'];
$modelo = $_POST['modelo'];
$dniDuenio = $_POST['dniDuenio'];

$resultado = $autoController->crearAuto($patente, $marca, $modelo, $dniDuenio);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Auto | TP4</title>
</head>

<body>

    <h1>Crear Nuevo Auto</h1>

    <?php if (isset($resultado['error'])) : ?>
        <p><?= $resultado['error'] ?></p>
    <?php else : ?>
        <p>Auto creado correctamente</p>
    <?php endif; ?>

    <a href="VerAutos.php">Volver</a>

</body>

</html>