<?php
include_once '../configuracion.php';

$datos = data_submitted();
$autoController = new AutoController();

$patente = $datos['patente'];

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
            <?php if (isset($result['error'])) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $result['error'] ?>
                </div>
            <?php endif; ?>

            <div class="col-md-6">
                <?php if (isset($result['auto'])) : ?>
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
                            <tr>
                                <td><?= $result['auto']->getPatente() ?></td>
                                <td><?= $result['auto']->getMarca() ?></td>
                                <td><?= $result['auto']->getModelo() ?></td>
                                <td><?= $result['auto']->getDniDuenio() ?></td>
                            </tr>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>