<?php
require '../../configuracion.php';
require '../../control/UnitConverter.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $valor = $_POST['value'];
    $desde = $_POST['fromUnit'];
    $hasta = $_POST['toUnit'];

    $convertidor = new Convertidor();
    $resultado = $convertidor->convertir($valor, $desde, $hasta);

} else {
    $resultado = null;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de Conversión</title>
   <?php include_once '../estructura/bootstrap.php'; ?>
<body>
<?php include_once '../estructura/header.php'; ?>
    <h1>Resultado de la Conversión</h1>

    <div>
        <?php if ($resultado !== null): ?>
            <p>Convertiste <strong><?php echo $valor; ?> <?php echo $desde; ?></strong> a <strong><?php echo $resultado; ?> <?php echo $hasta; ?></strong>.</p>
        <?php else: ?>
            <p>No se pudo obtener el resultado de la conversión.</p>
        <?php endif; ?>
    </div>

    <a href="../converter.php">Realizar otra conversión</a>
</body>
</html>