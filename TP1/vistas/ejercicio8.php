<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1 | Ejercicio 8 </title>
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="contenido">
        <section class="consigna">
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
        </section>

        <h2>Solución:</h2>
        <section class="solucion">
            <form action="accion/calcularEntrada.php" method="get">
                <label for="edad">Edad:</label>
                <input type="number" name="edad" id="edad" required min="0" max="150" value="0">

                <label for="estudiante">¿Es estudiante?</label>
                <select name="esEstudiante" id="estudiante">
                    <option value="1">Sí</option>
                    <option value="0">No</option>
                </select>

                <button type="submit">Calcular</button>
                <button type="reset">Limpiar</button>
            </form>
        </section>
    </div>
</body>

</html>