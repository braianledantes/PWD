<?php
include_once '../../configuracion.php';

$datos = data_submitted();
$personaController = new PersonaController();

$dni = $datos['dni'];
$nombre = $datos['nombre'];
$apellido = $datos['apellido'];
$fechaNac = $datos['fechaNac'];
$telefono = $datos['telefono'];
$domicilio = $datos['domicilio'];

$resultado = $personaController->actualizarPersona($dni, $nombre, $apellido, $fechaNac, $telefono, $domicilio);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Persona | TP4</title>
    <?php include_once '../estructura/bootstrap.php'; ?>
</head>

<body>

    <?php include_once '../estructura/header.php'; ?>

    <div class="container">
        <h2 class="mb-4">Actualizar Persona</h2>

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