<?php
include_once '../configuracion.php';

$datos = data_submitted();
$personaController = new PersonaController();

$dni = $datos['dni'];

$resultado = $personaController->buscarPersona($dni);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Persona | TP4</title>
    <?php include_once './estructura/bootstrap.php'; ?>
</head>

<body>

    <?php include_once './estructura/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-4">Actualizar Persona con DNI: <?= $dni ?></h2>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <?php if (isset($resultado['error'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $resultado['error'] ?>
                    </div>
                <?php endif; ?>

                <?php if (isset($resultado['persona'])) : ?>
                    <div class="col-12 d-flex justify-content-center">
                <form action="./ActualizarDatosPersona.php" method="post" style="width: 600px; max-width: 600px;" class="border p-3 rounded">
                    <input class="form-control" type="hidden" name="dni" id="dni" value="<?= $resultado['persona']->getNroDni() ?>" required>
                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="nombre">Nombre:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="nombre" id="nombre" value="<?= $resultado['persona']->getNombre() ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="apellido">Apellido:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="apellido" id="apellido" value="<?= $resultado['persona']->getApellido() ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="fechaNac">Nacimiento:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" name="fechaNac" id="fechaNac" value="<?= $resultado['persona']->getFechaNac() ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="telefono">Telefono:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="telefono" id="telefono" value="<?= $resultado['persona']->getTelefono() ?>" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="domicilio">Domicilio:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="domicilio" id="domicilio" value="<?= $resultado['persona']->getDomicilio() ?>" required>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Actualizar</button>
                </form>
            </div>
                <?php endif; ?>
            </div>
</body>

</html>