<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP2 | Ejercicio 3</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Header -->
    <?php require_once './estructura/header-ejercicios.php'; ?>
    <!-- Content -->
    <div class="container mt-4">
        <div class="g-3 shadow border">
            <h3 class="bg-dark text-white p-2">Cinem@as</h3>
            <form action="accion/crearPelicula.php" method="post" class="row p-3">
                <div class="col-md-6">
                    <label for="inputTitulo" class="form-label fw-bold">Título</label>
                    <input type="text" class="form-control" id="inputTitulo" placeholder="Título" name="titulo">
                </div>
                <div class="col-md-6">
                    <label for="inputActores" class="form-label fw-bold">Actores</label>
                    <input type="text" class="form-control" id="inputActores" placeholder="Actores" name="actores">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputDirector" class="form-label fw-bold">Director</label>
                    <input type="text" class="form-control" id="inputDirector" placeholder="Director" name="director">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputGuion" class="form-label fw-bold">Guión</label>
                    <input type="text" class="form-control" id="inputGuion" placeholder="Guión" name="guion">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputProduccion" class="form-label fw-bold">Producción</label>
                    <input type="text" class="form-control" id="inputProduccion" placeholder="Producción" name="produccion">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputAño" class="form-label fw-bold">Año</label>
                    <input type="number" class="form-control w-25" id="inputAño" placeholder="Año" name="anio">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputNacionalidad" class="form-label fw-bold">Nacionalidad</label>
                    <input type="text" class="form-control" id="inputNacionalidad" placeholder="Nacionalidad" name="nacionalidad">
                </div>
                <div class="col-md-6 mt-3">
                    <label for="inputGenero" class="form-label fw-bold">Género</label>
                    <select id="inputGenero" class="form-select w-75" name="genero">
                        <option value="" selected>Seleccione un género...</option>
                        <option value="comedia">Comedia</option>
                        <option value="drama">Drama</option>
                        <option value="terror">Terror</option>
                        <option value="romantica">Romantica</option>
                        <option value="suspenso">Suspenso</option>
                        <option value="otras">Otras</option>
                    </select>
                </div>
                <div class="col-md-4 mt-3">
                    <label for="inputDuracion" class="form-label fw-bold">Duración</label>
                    <input type="number" class="form-control" id="inputDuracion" placeholder="Duración" name="duracion">
                    <!-- indica que son minutos -->
                    <span>(minutos)</span>
                </div>
                <div class="col-md-8 mt-3">
                    <label for="edad" class="form-label fw-bold">Restricciones de edad</label>
                    <div class="d-flex gap-3">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="edad" id="inputTodoPublico" value="todoPublico" checked>
                            <label class="form-check-label" for="inputTodoPublico">
                                Todos los públicos
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="edad" id="inputMayores7" value="mayores7">
                            <label class="form-check-label" for="inputMayores7">
                                Mayores de 7 años
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="edad" id="inputMayores18" value="mayores18">
                            <label class="form-check-label" for="inputMayores18">
                                Mayores de 18 años
                            </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <label for="inputSinopsis" class="form-label fw-bold">Sinopsis</label>
                    <textarea class="form-control" id="inputSinopsis" rows="3" name="sinopsis"></textarea>
                </div>
                <div class="col-12 d-flex justify-content-end gap-1 mt-3">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                    <button type="reset" class="btn btn-secondary">Borrar</button>
                </div>
            </form>
        </div>

    </div>


    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- jquery and jquery-validator -->
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>

    <script src="./js/ejercicio4.js"></script>
</body>

</html>