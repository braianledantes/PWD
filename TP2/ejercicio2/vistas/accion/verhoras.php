<?php
$horas = [
    'lunes' => $_GET['lunes'],
    'martes' => $_GET['martes'],
    'miercoles' => $_GET['miercoles'],
    'jueves' => $_GET['jueves'],
    'viernes' => $_GET['viernes'],
];

$total = array_sum($horas);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver horas por semana</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container d-flex justify-content-center mt-3">
        <div class="p-3 border rounded bg-body-secondary" style="width: 600px; max-width: 600px;">
            <h2>Resultado:</h2>
            <div class="resultado">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <th>Día</th>
                            <th>Horas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($horas as $dia => $hora) : ?>
                            <tr>
                                <td><?= ucfirst($dia) ?></td>
                                <td><?= $hora ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <p>La cantidad total de horas que se cursan por semana es: <strong><?= $total ?></strong> </p>
            </div>
        </div>
    </div>

</body>

</html>