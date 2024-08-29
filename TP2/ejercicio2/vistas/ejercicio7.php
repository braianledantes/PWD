<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="./css/styles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Header -->
    <?php require_once '../vistas/estructura/header-ejercicios.php'; ?>
    
    <div class="container d-flex justify-content-center mt-3">
        <div style="width: 600px; max-width: 600px;">
            <div class="consigna p-3 border rounded bg-body-secondary">
                <h2>Ejercicio 7</h2>

                <p>Crear un página con un formulario que contenga dos input de tipo text y un select.
                    En los inputs se ingresarián números y en select debe dar la opción de una operación
                    matemática que podrá resolverse usando los números ingresados. En la página que procesa
                    la información se debe mostrar por pantalla la operación seleccionada, cada uno de los
                    operandos y el resultado obtenido de resolver la operación.</p>
            </div>

            <div class="mt-4 p-3 border rounded bg-body-secondary">
                <h2>Solución:</h2>
                <div class="solucion">
                    <form action="accion/calcular.php" method="get">
                        <div class="mb-3">
                            <label class="form-label" for="valor1">Valor 1:</label>
                            <input class="form-control" type="number" name="valor1" id="valor1" value="0">
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="valor2">Valor 2:</label>
                            <input class="form-control" type="number" name="valor2" id="valor2" value="0">
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="operacion" id="operacion">
                                <option value="suma">Suma</option>
                                <option value="resta">Resta</option>
                                <option value="multiplicacion">Multiplicacion</option>
                            </select>
                        </div>
                        <button class="btn btn-primary w-100" type="submit">Enviar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- jquery and jquery-validator -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    
    <script src="./js/validarOperacion.js"></script>
</body>

</html>