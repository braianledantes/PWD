<?php

include_once '../../control/Usuarios.php';

// arreglo asociativo de usuarios que contiene los usuarios y sus contraseñas
$usuarios = new Usuarios();

// obtiene los datos enviados por el formulario
$username = $_POST['username'];
$password = $_POST['password'];

$pudoLoguearse = $usuarios->login($username, $password);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 | Ejercicio 1</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
</head>

<body>
    <!-- Header -->
    <?php require_once '../estructura/header-accion.php'; ?>
    <!-- Content -->
    <div class="container mt-10">
        <?php if ($pudoLoguearse) : ?>
            <div class="alert alert-success z-n0" role="alert">
                <h2 class="alert-heading mb-4">Bienvenido <?= $username ?></h2>
            </div>
        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                <h2 class="alert-heading mb-4">Login fallido</h2>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>