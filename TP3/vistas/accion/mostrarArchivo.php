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
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header -->
    <?php include_once '../estructura/header-accion.php'; ?>
    <!-- Content -->
    <div class="container d-flex justify-content-center mt-3">
        <div class="" style="width: 600px; max-width: 600px;">
            <h2>Contenido del archivo</h2>
            <div class="p-3 border rounded bg-body-secondary">
                <form>
                    <div class="input-group">
                        <textarea class="form-control" style="height: 500px;" aria-label="With textarea"><?= $contenido ?></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>