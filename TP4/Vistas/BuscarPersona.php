<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar Persona | TP4</title>
    <?php include_once './estructura/bootstrap.php'; ?>

    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <?php include_once './estructura/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-4">Buscar Persona</h2>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <form id="buscarPersonaForm" action="./accion/accionBuscarPersona.php" method="get" style="width: 250px; max-width: 250px;" class="border p-3 rounded">
                    <label class="form-label" for="dni">DNI:</label>
                    <input class="form-control" type="text" name="dni" id="dni" required>
                    <label id="dniError" class="error" style="display: none;"></label>
                    <br>
                    <button class="btn btn-primary w-100" type="submit">Buscar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- jquery and jquery-validator -->
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#dni').on('input', function() {
                const dni = $(this).val();
                const dniRegex = /^\d{7,8}$/; // Formato DNI (7 u 8 dígitos)

                // Validar DNI
                if (!dniRegex.test(dni)) {
                    $('#dniError').text('El DNI debe tener 7 u 8 dígitos').show();
                    $(this).addClass('invalid');
                } else {
                    $('#dniError').hide(); 
                    $(this).removeClass('invalid');
                }
            });

            $('#buscarPersonaForm').on('submit', function(event) {
                const dni = $('#dni').val();
                const dniRegex = /^\d{7,8}$/; // Formato DNI (7 u 8 dígitos)

                // Validar DNI antes de enviar
                if (!dniRegex.test(dni)) {
                    event.preventDefault(); // Evitar envío si no es válido
                }
            });
        });
    </script>
</body>

</html>