<?php

$file = $_FILES['archivo'];
$fileName = $file['name'];
$contenido = file_get_contents($file['tmp_name']);
$extFile = pathinfo($fileName, PATHINFO_EXTENSION);
$esTxt = $extFile === "txt";

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra contenido de txt</title>
</head>
<body>
    <?php if($esTxt) : ?>
    <h2>Contenido del archivo : <?php echo $fileName ?> </h2>
    <p>
        <?php echo $contenido ?>
    </p>
    <?php else : ?>
    <h2>El archivo no es un txt</h2>
    <?php endif; ?>
</body>
</html>