<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio Duenño Auto | TP4</title>
    <?php include_once './estructura/bootstrap.php'; ?>
</head>

<body>

    <?php include_once './estructura/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-4">Cambio de Dueño de Auto</h2>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <form action="accionCambioDuenio.php" method="post" style="width: 250px; max-width: 250px;" class="border p-3 rounded">
                    <label class="form-label" for="patente">Patente:</label>
                    <input class="form-control" type="text" name="patente" id="patente" required>
                    <br>
                    <label class="form-label" for="dniDuenio">DNI del nuevo dueño:</label>
                    <input class="form-control" type="text" name="dniDuenio" id="dniDuenio" required>

                    <br>
                    <button class="btn btn-primary" type="submit">Cambiar Dueño</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>