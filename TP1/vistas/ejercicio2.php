<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1 | Ejercicio 2</title>
    <link rel="stylesheet" href="./assets/styles.css">
</head>

<body>

    <div class="contenido">
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
                <label for="lunes">Lunes:</label>
                <input type="number" name="lunes" id="lunes" required max="24" min="0">
                <label for="martes">Martes:</label>
                <input type="number" name="martes" id="martes" required max="24" min="0">
                <label for="miercoles">Miércoles:</label>
                <input type="number" name="miercoles" id="miercoles" required max="24" min="0">
                <label for="jueves">Jueves:</label>
                <input type="number" name="jueves" id="jueves" required max="24" min="0">
                <label for="viernes">Viernes:</label>
                <input type="number" name="viernes" id="viernes" required max="24" min="0">

                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>

</body>

</html>