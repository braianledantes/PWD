<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>TP1 | Ejercicio 3</title>
    <link rel="stylesheet" href="./css/styles.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Header -->
    <?php require_once '../vistas/estructura/header-ejercicios.php'; ?>
    
    <div class="container d-flex justify-content-center mt-3">
        <div style="width: 600px; max-width: 600px;">
            <div class="consigna p-3 border rounded bg-body-secondary">
                <h2>Ejercicio 3 al 6</h2>
                <ol start="3">
                    <li>
                        <p>Crear una página php que contenga un formulario HTML como el que se indica en la
                            imagen (darle formato con CSS), enviar estos datos por el método Post a otra página php
                            que los reciba y muestre por pantalla un mensaje como el siguiente: “Hola, yo soy
                            nombre , apellido tengo edad años y vivo en dirección”, usando la información recibida.
                            Cambiar el método Post por Get y analizar las diferencias </p>
                    </li>
                    <li>
                        <p>Modificar el formulario del ejercicio anterior para que usando la edad solicitada, enviar
                            esos datos a otra página en donde se muestren mensajes distintos dependiendo si la
                            persona es mayor de edad o no; (si la edad es mayor o igual a 18). </p>
                        <p>Enviar los datos usando el método GET y luego probar de modificar los datos
                            directamente en la url para ver los dos posibles mensajes. </p>
                    </li>
                    <li>
                        <p>Modificar el formulario del ejercicio anterior solicitando, tal que usando componentes
                            “radios buttons” se ingrese el nivel de estudio de la persona: 1-no tiene estudios, 2-
                            estudios primarios, 3-estudios secundarios. Agregar el componente que crea más
                            apropiado para solicitar el sexo. En la página que procesa el formulario mostrar además
                            un mensaje que indique el tipo de estudios que posee y su sexo.</p>
                    </li>
                    <li>
                        <p>Modificar el formulario del ejercicio anterior para que permita seleccionar los diferentes
                            deportes que practica (futbol, basket, tennis, voley) un alumno. Mostrar en la página
                            que procesa el formulario la cantidad de deportes que practica.</p>
                    </li>
                </ol>

            </div>

            <div class="mt-4 p-3 border rounded bg-body-secondary">
                <h2>Solución:</h2>
                <div class="solucion">
                    <form action="accion/verdatos.php" method="get">
                        <div class="mb-3">
                            <label class="form-label" for="nombre">Nombre:</label>
                            <input class="form-control" type="text" name="nombre" id="nombre" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="apellido">Apellido:</label>
                            <input class="form-control" type="text" name="apellido" id="apellido" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="edad">Edad:</label>
                            <input class="form-control" type="number" name="edad" id="edad" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="direccion">Dirección:</label>
                            <input class="form-control" type="text" name="direccion" id="direccion" required>
                        </div>
                        <div class="mb-3">
                            <label for="estudios">Nivel de estudios:</label>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estudios" id="estudios1" value="ninguno" required checked>
                                <label class="form-check-label" for="estudios1">Ninguno</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estudios" id="estudios2" value="primario" required>
                                <label class="form-check-label" for="estudios2">Primario</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estudios" id="estudios3" value="secundario" required>
                                <label class="form-check-label" for="estudios3">Secundario</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estudios" id="estudios4" value="terciario" required>
                                <label class="form-check-label" for="estudios4">Terciario</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="estudios" id="estudios5" value="universitario" required>
                                <label class="form-check-label" for="estudios5">Universitario</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="sexo">Sexo:</label>
                            <select class="form-select" name="sexo" id="sexo" required>
                                <option value="masculino">Masculino</option>
                                <option value="femenino">Femenino</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="deportes">Deportes:</label>
                            <div class="form-check">
                                <label class="from-check-label" for="deportes1">Fútbol</label>
                                <input class="form-check-input" type="checkbox" name="deportes[]" id="deportes1" value="futbol">
                            </div>
                            <div class="form-check">
                                <label class="from-check-labe" for="deportes2">Básquet</label>
                                <input class="form-check-input" type="checkbox" name="deportes[]" id="deportes2" value="basquet">
                            </div>
                            <div class="form-check">
                                <label for="deportes3">Tenis</label>
                                <input class="form-check-input" type="checkbox" name="deportes[]" id="deportes3" value="tenis">
                            </div>
                            <div class="form-check">
                                <label class="form-check-label" for="deportes4">Vóley</label>
                                <input class="form-check-input" type="checkbox" name="deportes[]" id="deportes4" value="voley">
                            </div>
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
    
    <script src="./js/validarDatos.js"></script>
</body>

</html>