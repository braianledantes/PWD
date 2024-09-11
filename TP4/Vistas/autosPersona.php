<?php
require_once '../Control/AutoController.php';

$autoController = new AutoController();

$dniDuenio = $_GET['dniDuenio'];
$result = $autoController->obtenerAutosSegunDuenio($dniDuenio);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Autos de persona | TP4</title>
</head>
<body>
    
    <h2>Autos de la persona con DNI: "<i><?= $dniDuenio ?></i>"</h2>

    <?php if (isset($result['error'])) : ?>
        <p><strong>Error:</strong> <?= $result['error'] ?></p>
    <?php else : ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Patente</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($result as $auto) : ?>
                    <tr>
                        <td><?= $auto['auto']->getPatente() ?></td>
                        <td><?= $auto['auto']->getMarca() ?></td>
                        <td><?= $auto['auto']->getModelo() ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <a href="listapersonas.php">Volver</a>

</body>
</html>