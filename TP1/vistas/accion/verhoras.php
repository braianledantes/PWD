<?php
$horas = [
    'lunes' => $_GET['lunes'],
    'martes' => $_GET['martes'],
    'miercoles' => $_GET['miercoles'],
    'jueves' => $_GET['jueves'],
    'viernes' => $_GET['viernes'],
    'sabado' => $_GET['sabado'],
    'domingo' => $_GET['domingo']
];

$total = array_sum($horas);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver horas por semana</title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>

<body>

    <div class="contenido">
        <h2>Resultado:</h2>
        <div class="resultado">
            <table style="width: 100%; text-align:center;">
                <thead>
                    <tr>
                        <th>Día</th>
                        <th>Horas</th>
                    </tr>
                </thead>
                <tbody >
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

</body>

</html>