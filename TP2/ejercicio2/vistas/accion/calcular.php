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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="contenido d-flex justify-content-center">
        <div class="bg-body-secondary mt-4 border rounded p-3">
            <h2>Resultado:</h2>
            <div class="resultado bg-body-secondary" style="max-width: 600px; min-width:400px;">
                <p class="calculado fs-1 text-center fw-bold">
                    <span class="valor1"><?= $v1 ?></span>
                    <span class="operacion"><?= $simbolo ?></span>
                    <span class="valor2"><?= $v2 ?></span>
                    <span class="igual">=</span>
                    <span class="res"><?= $resultado ?></span>
                </p>
            </div>
        </div>
    </div>

</body>

</html>