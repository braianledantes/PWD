<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7</title>
    <link rel="stylesheet" href="./styles/styles.css">
</head>

<body>
    <div class="contenido">
        <section class="consigna">
            <h2>Ejercicio 7</h2>

            <p>Crear un página con un formulario que contenga dos input de tipo text y un select.
                En los inputs se ingresarián números y en select debe dar la opción de una operación
                matemática que podrá resolverse usando los números ingresados. En la página que procesa
                la información se debe mostrar por pantalla la operación seleccionada, cada uno de los
                operandos y el resultado obtenido de resolver la operación.</p>
        </section>

        <h2>Solución:</h2>
        <div class="solucion">
            <form action="accion/calcular.php" method="get">
                <label for="valor1">Valor 1:</label>
                <input type="number" name="valor1" id="valor1" value="0">
                <label for="valor2">Valor 2:</label>
                <input type="number" name="valor2" id="valor2" value="0">
                <select name="operacion" id="operacion">
                    <option value="suma">Suma</option>
                    <option value="resta">Resta</option>
                    <option value="multiplicacion">Multiplicacion</option>
                </select>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>

</html>