<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <link rel="stylesheet" href="./css/styles.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Header -->
    <?php require_once './estructura/header-ejercicios.php'; ?>
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="p-3" >
                <div class="contenido">
                    <section class="consigna bg-secondary text-white p-3 rounded mb-4">
                        <h1>Ejercicio 1</h1>
                        <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                            llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                            enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                            respuesta, que permita volver a la página anterior.</p>
                    </section>

                    <h2>Solución:</h2>
                    <div class="solucion border p-3 rounded">
                        <form action="./accion/vernumero.php" method="post">
                            <div class="mb-3">
                                <label for="numero" class="form-label">Ingrese un número:</label>
                                <input class="form-control" type="number" name="numero" id="numero" required>
                            </div>
                            <button class="btn btn-primary w-100" type="submit">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery and jquery-validator -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script src="./js/validarNumero.js"></script>
</body>

</html>