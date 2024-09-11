<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio Duenño Auto | TP4</title>
</head>

<body>

    <h1>Cambio de Dueño de Auto</h1>

    <form action="../Vistas/accionCambioDuenio.php" method="post">
        <label for="patente">Patente:</label>
        <input type="text" name="patente" id="patente" required>
        <br>
        <label for="dniDuenio">DNI del nuevo dueño:</label>
        <input type="text" name="dniDuenio" id="dniDuenio" required>
        <br>
        <button type="submit">Cambiar Dueño</button>
    </form>

    <a href="VerAutos.php">Volver</a>

</body>

</html>