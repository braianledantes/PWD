<?php
$title = "TP - Librerias";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <?php include_once './estructura/bootstrap.php'; ?>

    <style>
     .fixed-card{
        z-index: -1;
    }
    </style>
</head>

<body>
    <?php include_once './estructura/header.php'; ?>

    <div class="contenedor" style="margin: 40px 100px;">
        <h1 style="font-style: italic;"><?= $title ?></h1>
        <h3 style="font-style: italic; color:lightgrey;">Grupo # 2</h3>

        <div class="card fixed-card">
            <div class="card-header">
                Librerias
            </div>
            <div class="card-body">
                <h5 class="card-title">Phpdotenv</h5>
                <p class="card-text">El archivo .env permite definir variables de entorno, como contraseñas y claves de API, manteniendo estas configuraciones separadas del código. Esto permite un acceso fácil a las variables desde PHP.</p>
            </div>

            <div class="card-body">
                <h5 class="card-title">UnitConverter</h5>
                <p class="card-text">El Unit Converter es una herramienta de código abierto que facilita la conversión entre diferentes unidades de medida. Permite a los usuarios convertir rápidamente entre una variedad de unidades en categorías como longitud, masa, temperatura y volumen, entre otros.</p>
            </div>
        </div>

        <!--Instalacion-->
        <div class="card  mt-5">
            <div class="card-header">
                Instalacion
            </div>

            <div class="card-body">
                <h5 class="card-title">Composer</h5>
                <p class="card-text">Composer es una herramienta de gestión de dependencias que simplifica la instalación y el manejo de las librerias. Lo usamos para facilitar la inclusión de bibliotecas requeridas, asegurando que todas las versiones sean compatibles y estén actualizadas.
                    <span></span>
                    <span></span>
                </p>
            </div>
            <div class="card-body">
                <h5 class="card-title">Cargar Autoload</h5>
                <p class="card-text">Esto permite que todas las clases de Unit Converter y phpdotenv se carguen automáticamente:</p>
                <span style="font-family: monospace;color:green">require 'vendor/autoload.php'; </span>
            </div>
        </div>

    </div>

</body>

</html>