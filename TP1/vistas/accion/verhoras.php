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
    <title>Carga Horaria por Semana</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
    <?php include_once '../estructura/header-accion.php'; ?>
    <div class="contenido">
        <h2>Horas de Cursada</h2>
        <div class="resultado" style="background-color:beige;">
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