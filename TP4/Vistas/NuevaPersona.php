<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Persona | TP4</title>
</head>

<body>

    <h1>Crear Nueva Persona</h1>

    <form action="accionNuevaPersona.php" method="post">
        <label for="dni">DNI:</label>
        <input type="text" name="dni" id="dni" required>
        <br>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <br>
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" required>
        <br>
        <label for="fechaNac">Fecha Nacimiento:</label>
        <input type="date" name="fechaNac" id="fechaNac" required>
        <br>
        <label for="telefono">Telefono:</label>
        <input type="text" name="telefono" id="telefono" required>
        <br>
        <label for="domicilio">Domicilio:</label>
        <input type="text" name="domicilio" id="domicilio" required>
        <br>
        <button type="submit">Crear</button>
    </form>

</body>

</html>