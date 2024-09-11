<?php
require_once '../Control/AutoController.php';

$autoController = new AutoController();

$patente = $_GET['patente'];

$result = $autoController->buscarAuto($patente);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Busqueda Auto | TP4</title>
</head>
<body>
    
    <h2>Patente buscada: "<i><?= $patente ?></i>"</h2>

    <?php if (isset($result['error'])) : ?>
        <p><strong>Error:</strong> <?= $result['error'] ?></p>
    <?php else : ?>
        <p><strong>Patente:</strong> <?= $result['auto']->getPatente() ?></p>
        <p><strong>Marca:</strong> <?= $result['auto']->getMarca() ?></p>
        <p><strong>Modelo:</strong> <?= $result['auto']->getModelo() ?></p>
        <p><strong>DNI Dueño:</strong> <?= $result['auto']->getDniDuenio() ?></p>
    <?php endif; ?>

    <a href="buscarAuto.php">Volver</a>
</body>
</html>