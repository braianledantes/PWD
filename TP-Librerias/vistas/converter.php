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
    
    <div class="contenedor mx-auto" style="margin: 40px; width: 80%; max-width: 600px;">
    <h1>Conversor de Unidades</h1>
    <form action= "./accion/accionConverter.php" method="POST">

    <div class="form-floating mb-3">
        <input type="number" name="value" class="form-control" id="floatingInput" placeholder="cualquier numero" required>
        <label for="value">Valor Numerico</label>
    </div>
   
    <label for="fromUnit" class="mb-3">Desde:</label>
    <select name="fromUnit" class="form-select mb-3">
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
    
    <label for="toUnit" class="mb-3">Convertir a:</label>
    <select name="toUnit" class="form-select">
    <option value="in">Pulgadas</option>
    <option value="cm">Centímetros</option>
        <option value="dm">Deccimetros</option>
        <option value="m">Metros</option>
        <option value="ft">Pies</option>
        <option value="h">Manos</option>
        <option value="km">Kilometros</option>
        <option value="um">Micrometros</option>
        <option value="mi">Millas</option>
        <option value="mm">Milimetros</option>
        <option value="nm">Nanometros</option>
        <option value="pc">Picometros</option>
        <option value="yd">Yardas</option>
    </select>
    
    <input type="submit" class="mt-3" value="Convertir">
    </form>

    </div>

</body>
</html>
