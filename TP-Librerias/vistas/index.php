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
</head>

<body>
<?php include_once './estructura/header.php'; ?>

    <h1 style="font-style: italic;"><?= $title ?></h1>
    <h3 style="font-style: italic; color:lightgrey;">Grupo # 2</h3>

    <h2> Libreria Phpdotenv</h2>
    <a href="../tests/phpdotenv.php">Ver ejemplo de uso</a>
    <h2>Libreria UnitConverter</h2>
    <a href="../tests/UnitConverter.php">Ver ejemplo de uso</a>
</body>

</html>