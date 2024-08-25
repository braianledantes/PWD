<?php
include_once '../../utils/funciones.php';
include_once '../../control/Calculadora.php';

$datos = darDatosSubmitted();
$calculadora = new Calculadora($datos);
$calculadora->calcular();

$v1 = $calculadora->getValor1();
$v2 = $calculadora->getValor2();
$simbolo = $calculadora->getSimboloOperacion();
$resultado = $calculadora->getResultado();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de operacion</title>
    <link rel="stylesheet" href="../assets/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
    <style>
        .resultado {
            background-color: lightyellow;
        }

        .calculado {
        text-align: center;
        font-weight: bold;
        font-size: 3rem;
        }

        .valor1 {
            color: brown;
        }

        .operacion {
            color: green;
        }

        .valor2 {
            color: blue;
        }

        .igual {
            color: orange;
        }

        .res {
            color: black;
        }
    </style>
</head>

<body>
    <div class="contenido">
        <!--<h2>Resultado:</h2>-->
        <div class="resultado">
            <p class="calculado">
                <span class="valor1"><?= $v1 ?></span>
                <span class="operacion"><?= $simbolo ?></span>
                <span class="valor2"><?= $v2 ?></span>
                <span class="igual">=</span>
                <span class="res"><?= $resultado ?></span>
            </p>
        </div>
    </div>
</body>

</html>