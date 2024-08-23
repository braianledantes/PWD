<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 | TP1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex justify-content-center mt-3">
        <div style="width: 600px; max-width: 600px;">
            <div class="consigna p-3 border rounded bg-body-secondary">
                <h2>Ejercicio 8</h2>
                <p>
                    La empresa de cine Cinem@as tiene establecidaas diferentes tarifas para las entradas, en función de la
                    edad
                    y de la condición de estudiante del cliente. Desea que sean los propios clientes que los puedan calcular
                    el
                    valor de sus entradas a través de una página web. Si es estudiante o menor de 12 años el precio es de
                    $160,
                    si es estudiante y mayor o igual de 12 años el precio es de $180, en cualquier otro cao el precio es de
                    #300. Diseñar un formulario que solicite la edad y permita ingresar si se trata de un estudiante o no.
                    Con
                    un botón enviar los datos a un script encargado de realizar el cálculo y visualizarlo. Agregar un botón
                    para
                    limpiar el formulario y volver a consultar.
                </p>
            </div>

            <div class="mt-4 p-3 border rounded bg-body-secondary">
                <h2>Solución:</h2>
                <div class="solucion">
                    <form action="accion/calcularEntrada.php" method="get">
                        <div class="mb-3">
                            <label class="form-label" for="edad">Edad:</label>
                            <input class="form-control" type="number" name="edad" id="edad" required min="0" max="150" value="0">
                        </div>
                        <label for="estudiante">¿Es estudiante?</label>
                        <div class="mb-3">
                            <select class="form-select" name="esEstudiante" id="estudiante">
                                <option value="1">Sí</option>
                                <option value="0">No</option>
                            </select>
                        </div>

                        <button class="btn btn-primary w-100 mt-2" type="submit">Calcular</button>
                        <button class="btn btn-secondary w-100 mt-2" type="reset">Limpiar</button>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <!-- jquery and jquery-validator -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $("form").validate({
                rules: {
                    edad: {
                        required: true,
                        number: true,
                        min: 0,
                        max: 150
                    }
                },
                messages: {
                    edad: {
                        required: "Por favor, ingrese la edad.",
                        number: "Por favor, ingrese un número.",
                        min: "Por favor, ingrese un número mayor o igual a 0.",
                        max: "Por favor, ingrese un número menor o igual a 150."
                    }
                }
            });
        });
    </script>
</body>

</html>