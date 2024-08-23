<?php
require_once '../../control/Archivo.php';
require_once '../../utils/funciones.php';

$data = data_submitted();
$archivo = new Archivo($data);
$contenido = $archivo->obtenerContenidoTxt();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostra contenido de txt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center mt-3">
        <div class="" style="width: 600px; max-width: 600px;">
            <h2>Contenido del archivo</h2>
            <div class="p-3 border rounded bg-body-secondary">
                <p>
                    <?php echo $contenido ?>
                </p>
            </div>
        </div>
    </div>
</body>

</html>