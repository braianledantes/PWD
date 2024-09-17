<?php
include_once '../configuracion.php';

$autoController = new AutoController();

$autosconDuenio = $autoController->obtenerAutosConDuenio();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Autos | TP4</title>

    <?php include_once './estructura/bootstrap.php'; ?>
</head>

<body>

    <?php include_once './estructura/header.php'; ?>

    <div class="container">
        <h1>Listado de Autos</h1>

        <table class="table table-striped border">
            <thead>
                <tr>
                    <th>Patente</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>DNI Dueño</th>
                    <th>Nombre Dueño</th>
                    <th>Apellido Dueño</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($autosconDuenio as $auto) : ?>
                    <tr>
                        <td><?= $auto['auto']->getPatente() ?></td>
                        <td><?= $auto['auto']->getMarca() ?></td>
                        <td><?= $auto['auto']->getModelo() ?></td>
                        <td><?= $auto['auto']->getDniDuenio() ?></td>
                        <td><?= $auto['duenio']->getNombre() ?></td>
                        <td><?= $auto['duenio']->getApellido() ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>