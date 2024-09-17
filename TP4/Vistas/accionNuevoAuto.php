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
    <?php include_once './estructura/bootstrap.php'; ?>
</head>

<body>

    <?php include_once './estructura/header.php'; ?>

    <div class="container">
        <h2 class="mb-4">Crear Nuevo Auto</h2>

        <?php if (isset($resultado['error'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?= $resultado['error'] ?>
            </div>
        <?php endif; ?>

        <?php if (isset($resultado['mensaje'])) : ?>
            <div class="alert alert-success" role="alert">
                <p><?= $resultado['mensaje'] ?></p>
            </div>
        <?php endif; ?>

    </div>
</body>

</html>