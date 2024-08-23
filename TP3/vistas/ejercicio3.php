<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 | TP2</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-12">
                <div class="consigna p-3 border rounded bg-body-secondary mb-3">
                    <h2>Ejercicio 3</h2>
                    <p>Agregue al formulario creado en el ejercicio 10 del práctico 2 un input file que les
                        permita adjuntar la imagen de película que se está cargando. Cuando se envía el formulario se
                        deberá guardar la imagen y luego mostrarla junto con la información cargada en el formulario.</p>
                    <p><strong><i>OBS: Recuerde chequear los permisos sobre el directorio donde se almacenarán los archivos</i></strong></p>
                </div>
            </div>
        </div>
        <div class="g-3 shadow border">
            <h3 class="bg-dark text-white p-2">Cinem@as</h3>
            <form action="accion/crearPelicula.php" method="post" enctype="multipart/form-data" class="row p-3">
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
                <div class="col-12 mt-3">
                    <label for="inputImagen" class="form-label fw-bold">Imagen</label>
                    <input type="file" class="form-control" id="inputImagen" name="archivo">
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
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function() {
            $("form").validate({
                rules: {
                    titulo: {
                        required: true
                    },
                    actores: {
                        required: true
                    },
                    director: {
                        required: true
                    },
                    guion: {
                        required: true
                    },
                    produccion: {
                        required: true
                    },
                    anio: {
                        required: true,
                        maxlength: 4,
                        digits: true
                    },
                    nacionalidad: {
                        required: true
                    },
                    genero: {
                        required: true
                    },
                    duracion: {
                        required: true,
                        maxlength: 3,
                        digits: true
                    },
                    sinopsis: {
                        required: true
                    },
                    imagen: {
                        required: true
                    }
                },
                messages: {
                    titulo: {
                        required: "El campo es requerido"
                    },
                    actores: {
                        required: "El campo es requerido"
                    },
                    director: {
                        required: "El campo es requerido"
                    },
                    guion: {
                        required: "El campo es requerido"
                    },
                    produccion: {
                        required: "El campo es requerido"
                    },
                    anio: {
                        required: "El campo es requerido",
                        maxlength: "El campo debe tener como máximo 4 caracteres",
                        digits: "El campo debe ser un número"
                    },
                    nacionalidad: {
                        required: "El campo es requerido"
                    },
                    genero: {
                        required: "El campo es requerido"
                    },
                    duracion: {
                        required: "El campo es requerido",
                        maxlength: "El campo debe tener como máximo 3 caracteres",
                        digits: "El campo debe ser un número"
                    },
                    sinopsis: {
                        required: "El campo es requerido"
                    },
                    imagen: {
                        required: "El campo es requerido"
                    }
                },
                errorElement: "div",
                errorPlacement: function(error, element) {
                    error.addClass("invalid-feedback");
                    error.insertAfter(element);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass("is-invalid").removeClass("is-valid");
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass("is-invalid");
                }
            })
        });
    </script>
</body>

</html>