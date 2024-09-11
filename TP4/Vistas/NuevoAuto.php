<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Auto | TP4</title>
</head>

<body>

    <h1>Crear Nuevo Auto</h1>

    <form action="accionNuevoAuto.php" method="post">
        <label for="patente">Patente:</label>
        <input type="text" name="patente" id="patente" required>
        <br>
        <label for="marca">Marca:</label>
        <input type="text" name="marca" id="marca" required>
        <br>
        <label for="modelo">Modelo:</label>
        <input type="text" name="modelo" id="modelo" required>
        <br>
        <label for="dniDuenio">DNI Dueño:</label>
        <input type="text" name="dniDuenio" id="dniDuenio" required>
        <br>
        <button type="submit">Crear</button>
    </form>

    <a href="listaAutos.php">Volver</a>

</body>

</html>