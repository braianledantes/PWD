<?php
require '../../configuracion.php';
require '../../tests/UnitConverter.php'; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $valor = $_POST['value'];
    $desde = $_POST['fromUnit'];
    $hasta = $_POST['toUnit'];

    // Crear una instancia de Convertidor
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
    <link rel="stylesheet" href="styles.css"> <!-- Estilos opcionales -->
</head>
<body>
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