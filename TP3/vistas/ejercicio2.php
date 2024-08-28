<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP3 | Ejercicio 2</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <!-- Header -->
    <?php include_once './estructura/header-ejercicios.php'; ?>
    <!-- Content -->
    <div class="container d-flex justify-content-center mt-3">
        <div style="width: 600px; max-width: 600px;">

            <div class="consigna p-3 border rounded bg-body-secondary mb-3">
                <h2>Ejercicio 2</h2>
                <p>Crear un formulario que permita subir un archivo. En el servidor se deberá controlar
                    que el tipo esperado sea txt (texto plano), si es correcto deberá abrir el archivo y mostrar su
                    contenido en un textarea.</p>
                <p><strong>(OBS: Referencia a funciones para trabajar con archivos <a href="http://php.net/manual/en/ref.filesystem.php" target="_blank" rel="noopener noreferrer">http://php.net/manual/en/ref.filesystem.php</a> ) </strong></p>

            </div>

            <form class="border p-3 rounded" action="accion/mostrarArchivo.php" method="post" enctype="multipart/form-data">
                <h2 class="mb-3">Solución:</h2>
                <div class="mb-3">
                    <label for="archivo" class="form-label">Subir un archivo con extensión <strong><i>.txt</i></strong></label>
                    <input type="file" class="form-control" id="archivo" name="archivo" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Subir archivo</button>
            </form>
        </div>
    </div>
</body>

</html>