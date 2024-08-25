<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TP1 | Ejercicio 1</title>
    <link rel="stylesheet" href="./assets/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="contenido">
        <section class="consigna">
            <h1>Ejercicio 1</h1>
            <p>Confeccionar un formulario que solicite un número. Al pulsar el botón de enviar debe
                llamar a un script <strong>vernumero.php</strong> y visualizar un mensaje que indique si el número
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