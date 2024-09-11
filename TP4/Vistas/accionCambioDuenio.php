<?php
require_once '../Control/AutoController.php';

$autoController = new AutoController();

$patente = $_POST['patente'];
$dniDuenio = $_POST['dniDuenio'];

$resultado = $autoController->cambiarDuenio($patente, $dniDuenio);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio Duenño | TP4</title>
</head>

<body>
    
    <h1>Cambio de Dueño de Auto</h1>

    <?php if (isset($resultado['error'])) : ?>
        <p><?= $resultado['error'] ?></p>
    <?php else : ?>
        <p>Dueño cambiado correctamente</p>
    <?php endif; ?>

    <a href="VerAutos.php">Volver</a>

</body>

</html>