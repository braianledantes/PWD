<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Auto | TP4</title>
    <?php include_once './estructura/bootstrap.php'; ?>
</head>

<body>

    <?php include_once './estructura/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-4">Crear Nuevo Auto</h2>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <form action="accionNuevoAuto.php" method="post" style="width: 600px; max-width: 600px;" class="border p-3 rounded">
                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="patente">Patente:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="patente" id="patente" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="marca">Marca:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="marca" id="marca" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="modelo">Modelo:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="modelo" id="modelo" required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="form-label col-sm-2 col-form-label" for="dniDuenio">DNI Dueño:</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="dniDuenio" id="dniDuenio" required>
                        </div>
                    </div>

                    <button class="btn btn-primary" type="submit">Crear</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>