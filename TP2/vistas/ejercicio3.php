<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 | Ejercicio 3</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-secondary">
    <!-- Header -->
    <?php require_once './estructura/header-ejercicios.php'; ?>
    <!-- Content -->
    <div class="container" style="margin-top:150px;">
        <div class="row justify-content-center mt-3">
            <div class="col" style="max-width: 400px;">
                <form class="container bg-white border rounded shadow p-4" action="accion/verificarPass.php" method="post">
                    <div class="row mb-4">
                        <h2 class="text-center">Member Login</h2>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" id="username">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" name="password" id="password">
                        </div>
                    </div>

                    <div class="row mb-4 mx-1">
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- jquery and jquery-validator -->
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>

    <script src="./js/ejercicio3.js"></script>
</body>

</html>