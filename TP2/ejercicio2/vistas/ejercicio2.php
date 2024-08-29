<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1 | Ejercicio 2</title>
    <link rel="stylesheet" href="./css/styles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Header -->
    <?php require_once '../vistas/estructura/header-ejercicios.php'; ?>
    
    <div class="container d-flex justify-content-center mt-3">
        <div class="p-3 border rounded bg-body-secondary" style="width: 600px; max-width: 600px;">
            <section class="consigna">
                <h1>Ejercicio 2</h1>
                <p>Crear una página php que contenga un formulario HTML que permita ingresar las horas
                    de cursada, de la materia Programación Web Dinámica, por cada día de la semana.
                    Enviar los datos del formulario por el método Get a otra página php que los reciba y
                    complete un array unidimensional. Visualizar por pantalla la cantidad total de horas que
                    se cursan por semana.</p>
            </section>

            <h2>Solución:</h2>
            <div class="solucion">
                <form action="accion/verhoras.php" method="get">
                    <div class="mb-3">
                        <label class="form-label" for="lunes">Lunes:</label>
                        <input class="form-control" type="number" name="lunes" id="lunes" required max="24" min="0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="martes">Martes:</label>
                        <input class="form-control" type="number" name="martes" id="martes" required max="24" min="0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="miercoles">Miércoles:</label>
                        <input class="form-control" type="number" name="miercoles" id="miercoles" required max="24" min="0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="jueves">Jueves:</label>
                        <input class="form-control" type="number" name="jueves" id="jueves" required max="24" min="0">
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="viernes">Viernes:</label>
                        <input class="form-control" type="number" name="viernes" id="viernes" required max="24" min="0">
                    </div>

                    <button class="btn btn-primary w-100" type="submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- jquery and jquery-validator -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script src="./js/validarHoras.js"></script>
</body>

</html>