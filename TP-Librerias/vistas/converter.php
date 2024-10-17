<?php
include_once '../configuracion.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unit Converter | TP Librerias</title>
    <?php include_once './estructura/bootstrap.php'; ?>
</head>

<body>
    <?php include_once './estructura/header.php'; ?>
    
    <div class="container">
    <h1>Conversor de Unidades</h1>
    <form action= "./accion/accionConverter.php" method="POST">
    <label for="value">Valor:</label>
    <input type="number" name="value" required>
    
    <label for="fromUnit">Desde:</label>

    <select name="fromUnit">
        <option value="cm">Centímetros</option>
        <option value="dm">Deccimetros</option>
        <option value="m">Metros</option>
        <option value="ft">Pies</option>
        <option value="h">Manos</option>
        <option value="in">Pulgadas</option>
        <option value="km">Kilometros</option>
        <option value="um">Micrometros</option>
        <option value="mi">Millas</option>
        <option value="mm">Milimetros</option>
        <option value="nm">Nanometros</option>
        <option value="pc">Picometros</option>
        <option value="yd">Yardas</option>
        
    </select>
    
    <label for="toUnit">A:</label>
    <select name="toUnit">
    <option value="cm">Centímetros</option>
        <option value="dm">Deccimetros</option>
        <option value="m">Metros</option>
        <option value="ft">Pies</option>
        <option value="h">Manos</option>
        <option value="in">Pulgadas</option>
        <option value="km">Kilometros</option>
        <option value="um">Micrometros</option>
        <option value="mi">Millas</option>
        <option value="mm">Milimetros</option>
        <option value="nm">Nanometros</option>
        <option value="pc">Picometros</option>
        <option value="yd">Yardas</option>
    </select>
    
    <input type="submit" value="Convertir">
</form>

    </div>

</body>
</html>
