<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1 | Ejercicio 1</title>
    <link rel="stylesheet" href="./assets/styles.css">
</head>

<body>
    <div class="contenido">
        <section class="consigna">
            <h1>Ejercicio 1</h1>
            <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                llamar a un script –vernumero.php- y visualizar un mensaje que indique si el número
                enviado fue: positivo, cero o negativo. Añadir un link, a la página que visualiza la
                respuesta, que permita volver a la página anterior.</p>
        </section>

        <h2>Solución:</h2>
        <div class="solucion">
            <form action="./accion/vernumero.php" method="post">
                <label for="numero">Ingrese un número:</label>
                <input type="number" name="numero" id="numero" required>
                <button type="submit">Enviar</button>
            </form>
        </div>
    </div>
</body>

</html>