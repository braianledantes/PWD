<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Persona | TP4</title>
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
                <form action="accionNuevaPersona.php" method="post" style="width: 600px; max-width: 600px;" class="border p-3 rounded">
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
    </div>

</body>

</html>