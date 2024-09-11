<?php
require_once '../Control/AutoController.php';

$autoController = new AutoController();

$autosconDuenio = $autoController->obtenerAutosConDuenio();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Autos | TP4</title>
</head>
<body>
    
    <h1>Autos</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Patente</th>
                <th>DNI Dueño</th>
                <th>Nombre Dueño</th>
                <th>Apellido Dueño</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($autosconDuenio as $auto) : ?>
                <tr>
                    <td><?= $auto['auto']->getMarca() ?></td>
                    <td><?= $auto['auto']->getModelo() ?></td>
                    <td><?= $auto['auto']->getPatente() ?></td>
                    <td><?= $auto['auto']->getDniDuenio() ?></td>
                    <td><?= $auto['duenio']->getNombre() ?></td>
                    <td><?= $auto['duenio']->getApellido() ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <a href="index.php">Volver</a>

</body>
</html>