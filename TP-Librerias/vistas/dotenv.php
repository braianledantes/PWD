<?php
include_once '../configuracion.php';

$personaController = new PersonaController();

$result = $personaController->obtenerPersonas();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Dotenv | TP Librerias</title>
    <?php include_once './estructura/bootstrap.php'; ?>
</head>

<body>

    <?php include_once './estructura/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-4">Crear Nueva Persona</h2>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <form action="./accion/accionNuevaPersona.php" method="post" style="width: 600px; max-width: 600px;" class="border p-3 rounded" id="miFormulario">
                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="dni">DNI:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="dni" id="dni" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="nombre">Nombre:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="nombre" id="nombre" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="apellido">Apellido:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="apellido" id="apellido" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="fechaNac">Nacimiento:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" name="fechaNac" id="fechaNac" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="telefono">Telefono:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="telefono" id="telefono" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="domicilio">Domicilio:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="domicilio" id="domicilio" required>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </div>
        </div>

        <div class="row mt-4">
            <h1 class="text-center">Lista de Personas</h1>

            <table class="table table-striped border">
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Fecha Nacimiento</th>
                        <th>Telefono</th>
                        <th>Domicilio</th>
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
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- jquery and jquery-validator -->
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>

    <script src="./js/validarPersona.js"></script>

</body>

</html>