<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Auto | TP 4</title>

    <?php include_once './estructura/bootstrap.php'; ?>

    <style>
        .error {
            color: #8B0000; 
            font-size: 0.9rem; 
            font-style: italic;
        }
        .invalid {
            border: 1px solid #8B0000; /* Borde rojo vino oscuro */
            background-color: rgba(255, 182, 193, 0.5); /* Fondo rosa */
            box-shadow: 0 0 5px rgba(139, 0, 0, 0.5); /* Efecto difuminado */
        }
    </style>

</head>

<body>
    <?php include_once './estructura/header.php'; ?>

    <div class="container d-flex justify-content-center">
        <form id="buscarAutoForm" action="./accion/accionBuscarAuto.php" method="get" style="width: 300px; max-width: 600px;" class="border p-3 rounded">
            <h2 class="mb-3">Buscar Auto</h2>
            <div class="mb-3">
                <label class="form-label" for="patente">Patente:</label>
                <input class="form-control" type="text" name="patente" id="patente">
                <label id="patenteError" class="error" style="display: none;"></label>
            </div>
            <button class="btn btn-primary w-100" type="submit">Buscar</button>
        </form>
    </div>

    <!-- jquery and jquery-validator -->
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#patente').on('input', function() {
                const patente = $(this).val();
                const patenteRegex = /^[A-Z]{3} \d{3}$/; // Formato AAA 111

                // Validar patente
                if (!patenteRegex.test(patente)) {
                    $('#patenteError').text('Debe tener el formato "ABC 123"').show();
                    $(this).addClass('invalid');
                } else {
                    $('#patenteError').hide(); 
                    $(this).removeClass('invalid');
                }
            });

            $('#buscarAutoForm').on('submit', function(event) {
                const patente = $('#patente').val();
                const patenteRegex = /^[A-Z]{3} \d{3}$/; // Formato AAA 111

                // Validar patente antes de enviar
                if (!patenteRegex.test(patente)) {
                    event.preventDefault(); // Evitar envío si no es válido
                }
            });
        });
    </script>
</body>

</html>