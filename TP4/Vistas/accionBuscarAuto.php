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
    <?php include_once './estructura/bootstrap.php'; ?>
</head>

<body>

    <?php include_once './estructura/header.php'; ?>

    <div class="container ">
        <h2 class="mb-4">Resultado de la busqueda de auto con patente: <?= $patente ?></h2>
        <div class="row">
            <div class="col-md-6">
                <table class="table table-striped border">
                    <thead>
                        <tr>
                            <th>Patente</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>DNI Dueño</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($result != null) : ?>
                            <tr>
                                <td><?= $result['auto']->getPatente() ?></td>
                                <td><?= $result['auto']->getMarca() ?></td>
                                <td><?= $result['auto']->getModelo() ?></td>
                                <td><?= $result['auto']->getDniDuenio() ?></td>
                            </tr>
                        <?php else : ?>
                            <tr>
                                <td colspan="6">No se encontraron resultados</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>