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

    <?php include_once './estructura/bootstrap.php'; ?>
</head>

<body>

    <?php include_once './estructura/header.php'; ?>
    
    <div class="container">
        <h2 class="mb-4">Listado de Autos de la persona con DNI: <?= $dniDuenio ?></h2>

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
                <?php foreach ($result as $auto) : ?>
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