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
                <h2 class="text-center my-4">Buscar Persona</h2>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <form action="accionBuscarPersona.php" method="get" style="width: 250px; max-width: 250px;" class="border p-3 rounded">
                    <label class="form-label" for="dni">DNI:</label>
                    <input class="form-control" type="text" name="dni" id="dni" required>
                    <br>
                    <button class="btn btn-primary w-100" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>