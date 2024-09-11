<?php
require_once '../Control/PersonaController.php';

$personaController = new PersonaController();

$result = $personaController->obtenerPersonas();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Personas | TP4</title>
</head>
<body>
    <h1>Lista de Personas</h1>

    <table border="1">
        <thead>
            <tr>
                <th>DNI</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha Nacimiento</th>
                <th>Telefono</th>
                <th>Domicilio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result['personas'] as $persona) : ?>
                <tr>
                    <td><?= $persona->getNroDni() ?></td>
                    <td><?= $persona->getNombre() ?></td>
                    <td><?= $persona->getApellido() ?></td>
                    <td><?= $persona->getFechaNac() ?></td>
                    <td><?= $persona->getTelefono() ?></td>
                    <td><?= $persona->getDomicilio() ?></td>
                    <td>
                        <a href="autosPersona.php?dniDuenio=<?= $persona->getNroDni() ?>">Ver Autos</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>