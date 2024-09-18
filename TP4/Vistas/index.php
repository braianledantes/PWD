<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio | TP4</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous">
    </script>

    <link rel="stylesheet" href="./css/styles.css">
    
</head>

<body>
    <?php include_once './estructura/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-4">
                <div id="list-example" class="list-group">
                <h1 style="font-style: italic;"> PHP / MySQL / PDO</h1>
                <h3 style="font-style: italic; color:lightgrey;">Grupo # 2</h3>
                    <a class="list-group-item list-group-item-action active" href="#list-item-1" data-target="#content-1">Ver Autos</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-2" data-target="#content-2">Buscar Auto</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-3" data-target="#content-3">Listar Personas</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-4" data-target="#content-4">Nueva Persona</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-5" data-target="#content-5">Nuevo Auto</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-6" data-target="#content-6">Cambio Dueño de Auto</a>
                    <a class="list-group-item list-group-item-action" href="#list-item-7" data-target="#content-7">Buscar Personas</a>
                </div>
            </div>
            <div class="col-8">
                <div class="scrollspy-example " tabindex="0">
                <h4 style="font-style: italic;color:grey;">Ejercicios</h4>
                <hr>
                    <div id="content-1" class="content active">
                    <h4>Ver Autos</h4>
                    <p>Crear   una   pagina   php   “VerAutos.php”,   en   ella   usando   la   capa   de   control   correspondientemostrar todos los datos de los autos que se encuentran cargados, de los dueños mostrar nombre y apellido. En caso de que no se encuentre ningún auto cargado en la base mostrar un mensaje indicando que no hay autos cargados.</p>
                    </div>

                    <div id="content-2" class="content">
                    <h4>Buscar Auto</h4>
                    <p>Crear una pagina "buscarAuto.php" que contenga un formulario en donde se solicite el numero de patente de  un auto, estos datos deberán  ser enviados a una  pagina “accionBuscarAuto.php”  en donde usando la clase de control correspondiente, se soliciten los datos completos del auto que se corresponda con la   patente   ingresada   y   mostrar   los   datos   en   una   tabla.   También   deberán   mostrar   los   carteles   que   crean convenientes en caso de que no se encuentre ningún auto con la patente ingresada. Utilizar   css   y   validaciones   javaScript   cuando   crea   conveniente.   Recordar   usar   la   capa   de   control   antes generada, no se puede acceder directamente a las clases del ORM</p>
                    </div>

                    <div id="content-3" class="content">
                    <h4>Listar Personas</h4>
                    <p>Crear   una   página   "listaPersonas.php"   que   muestre   un   listado   con   las   personas   que   se encuentran cargadas y un link a otra página “autosPersona.php” que recibe un dni de una persona y muestra los datos de la persona y un listado de los autos que tiene asociados. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
                    </div>

                    <div id="content-4" class="content">
                    <h4>Nueva Persona</h4>
                    <p>Crear una página “NuevaPersona.php” que contenga un formulario que permita solicitar todos los datos de una persona. Estos datos serán enviados a una página “accionNuevaPersona.php” que cargue un nuevo registro en la tabla persona de la base de datos. Se debe mostrar un mensaje que indique si se pudo  o no  cargar  los datos  de  la persona.  Utilizar  css y  validaciones  javaScript cuando  crea  conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM.</p>
                    </div>

                    <div id="content-5" class="content">
                    <h4>Nuevo Auto</h4>
                    <p>Crear una  página  “NuevoAuto.php”  que  contenga  un  formulario  en el  que  se permita  cargar todos   los   datos   de   un   auto   (incluso   su   dueño).   Estos   datos   serán   enviados   a   una   página “accionNuevoAuto.php” que cargue un nuevo registro en la tabla auto de la base de datos. Se debe chequear antes que la persona dueña del auto ya se encuentre cargada en la base de datos, de no ser así mostrar un link a la página que permite carga una nueva persona. Se debe mostrar un mensaje que indique si se pudo o no cargar los datos Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM</p>
                    </div>

                    <div id="content-6" class="content">
                    <h4>Cambio Dueño de Auto</h4>
                    <p>Crear   una   página   “CambioDuenio.php”   que   contenga   un   formulario   en   donde   se   solicite   el numero de patente de un auto y un numero de documento de una persona, estos datos deberán ser enviados a   una   página   “accionCambioDuenio.php”   en   donde   se   realice   cambio   del   dueño   del   auto   de   la   patente ingresada en el formulario. Mostrar mensajes de error en caso de que el auto o la persona no se encuentren cargados. Utilizar css y validaciones javaScript cuando crea conveniente. Recordar usar la capa de control antes generada, no se puede acceder directamente a las clases del ORM</p>
                    </div>

                    <div id="content-7" class="content">
                    <h4>Buscar Personas</h4>
                    <p>Crear   una   página   “BuscarPersona.html”   que   contenga   un   formulario   que   permita   cargar   un numero de documento de una persona. Estos datos serán enviados a una página “accionBuscarPersona.php” busque los datos de la persona cuyo documento sea el ingresado en el formulario los muestre en un nuevo formulario; a su vez este nuevo formulario deberá permitir modificar los datos mostrados (excepto el nro de documento) y estos serán enviados a otra página “ActualizarDatosPersona.php” que actualiza los datos de la persona.  Utilizar  css  y  validaciones   javaScript  cuando  crea   conveniente.  Recordar   usar  la  capa  de  control antes generada, no se puede acceder directamente a las clases del ORM.</p>
                    </div>  

                </div>
            </div>
        </div>

    </div>

    <script>
    document.querySelectorAll('.list-group-item').forEach(item => {
        item.addEventListener('click', function(event) {
            event.preventDefault(); // Evitar el desplazamiento por defecto

            // Ocultar todos los contenidos
            document.querySelectorAll('.content').forEach(content => {
                content.classList.remove('active');
            });

             // Marcar el elemento como activo
             document.querySelectorAll('.list-group-item').forEach(link => {
                    link.classList.remove('active'); // Quitar clase activa a todos
                });
                this.classList.add('active'); // Agregar clase activa al clicado

            // Mostrar el contenido correspondiente
            const target = this.getAttribute('data-target');
            document.querySelector(target).classList.add('active');
        });
    });
    </script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>