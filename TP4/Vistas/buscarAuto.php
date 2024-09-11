<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Auto | TP 4</title>

    <?php include_once './estructura/bootstrap.php'; ?>
</head>

<body>
    <?php include_once './estructura/header.php'; ?>

    <div class="container d-flex justify-content-center">
        <form action="accionBuscarAuto.php" method="get" style="width: 300px; max-width: 600px;" class="border p-3 rounded">
            <h2 class="mb-3">Buscar Auto</h2>
            <div class="mb-3">
                <label class="form-label" for="patente">Patente:</label>
                <input class="form-control" type="text" name="patente" id="patente">
            </div>
            <button class="btn btn-primary w-100" type="submit">Buscar</button>
        </form>
    </div>
</body>

</html>