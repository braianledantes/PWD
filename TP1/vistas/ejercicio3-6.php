<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>TP1 | Ejercicio 3-6</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>

    <div class="contenido">
        <div class="consigna">
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

        <h2>Solución:</h2>
        <div class="solucion">
            <form action="accion/verdatos.php" method="get">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" id="nombre" required>
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" id="apellido" required>
                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad" required>
                <label for="direccion">Dirección:</label>
                <input type="text" name="direccion" id="direccion" required>
                <label for="estudios">Nivel de estudios:</label>
                <label for="estudios1"><input type="radio" name="estudios" id="estudios1" value="ninguno" required> Ninguno</label>
                <label for="estudios2"><input type="radio" name="estudios" id="estudios2" value="primario" required> Primario</label>
                <label for="estudios3"><input type="radio" name="estudios" id="estudios3" value="secundario" required> Secundario</label>
                <label for="estudios4"><input type="radio" name="estudios" id="estudios4" value="terciario" required> Terciario</label>
                <label for="estudios5"><input type="radio" name="estudios" id="estudios5" value="universitario" required> Universitario</label>
                <label for="sexo">Sexo:</label>
                <select name="sexo" id="sexo" required>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                </select>
                <label for="deportes">Deportes:</label>
                <label for="deportes1"><input type="checkbox" name="deportes[]" id="deportes1" value="futbol"> Fútbol</label>
                <label for="deportes2"><input type="checkbox" name="deportes[]" id="deportes2" value="basquet"> Básquet</label>
                <label for="deportes3"><input type="checkbox" name="deportes[]" id="deportes3" value="tenis"> Tenis</label>
                <label for="deportes4"><input type="checkbox" name="deportes[]" id="deportes4" value="voley"> Vóley</label>

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

</body>

</html>