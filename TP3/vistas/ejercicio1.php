<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TP3 | Ejercicio 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container d-flex justify-content-center mt-3">
        <div style="width: 600px; max-width: 600px;">

            <div class="consigna p-3 border rounded bg-body-secondary mb-3">
                <h2>Ejercicio 1</h2>
                <p>Crear un formulario que permita subir un archivo. En la página que procesa la información se debe mostrar un mensaje que indique si el archivo fue subido correctamente o no.</p>
            </div>

            
            <form class="border p-3 rounded" action="accion/subirArchivo.php" method="post" enctype="multipart/form-data">
                <h2 class="mb-3">Solución:</h2>
                <div class="mb-3">
                    <label for="archivo" class="form-label">Subir un archivo:</label>
                    <input type="file" class="form-control" id="archivo" name="archivo" required>
                </div>
                <button type="submit" class="btn btn-primary w-100">Subir archivo</button>
            </form>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>