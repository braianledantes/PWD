<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambio Duenño Auto | TP4</title>
    <?php include_once './estructura/bootstrap.php'; ?>

    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>

    <?php include_once './estructura/header.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center my-4">Cambio de Dueño de Auto</h2>
            </div>

            <div class="col-12 d-flex justify-content-center">
                <form id="cambioDuenioForm" action="./accion/accionCambioDuenio.php" method="post" style="width: 250px; max-width: 250px;" class="border p-3 rounded">
                    <label class="form-label" for="patente">Patente:</label>
                    <input class="form-control" type="text" name="patente" id="patente" required>
                    <label id="patenteError" class="error" style="display: none;"></label>
                    <br>
                    <label class="form-label" for="dniDuenio">DNI del nuevo dueño:</label>
                    <input class="form-control" type="text" name="dniDuenio" id="dniDuenio" required>
                    <label id="dniError" class="error" style="display: none;"></label>

                    <br>
                    <button class="btn btn-primary" type="submit">Cambiar Dueño</button>
                </form>
            </div>
        </div>
    </div>

    <!-- jquery and jquery-validator -->
    <script src="./js/jquery-3.7.1.min.js"></script>
    <script src="./js/jquery.validate.min.js"></script>

    <script>
        $(document).ready(function() {
            // Validación de Patente
            $('#patente').on('input', function() {
                const patente = $(this).val();
                const patenteRegex = /^[A-Z]{3} \d{3}$/; // Formato ABC 123

                if (!patenteRegex.test(patente)) {
                    $('#patenteError').text('La patente debe tener el formato "ABC 123"').show();
                    $(this).addClass('invalid');
                } else {
                    $('#patenteError').hide(); 
                    $(this).removeClass('invalid');
                }
            });

            // Validación de DNI
            $('#dniDuenio').on('input', function() {
                const dni = $(this).val();
                const dniRegex = /^\d{7,8}$/; // Formato DNI (7 u 8 dígitos)

                if (!dniRegex.test(dni)) {
                    $('#dniError').text('El DNI debe tener 7 u 8 dígitos').show();
                    $(this).addClass('invalid');
                } else {
                    $('#dniError').hide(); 
                    $(this).removeClass('invalid');
                }
            });

            // Prevención de envío si hay errores
            $('#cambioDuenioForm').on('submit', function(event) {
                const patente = $('#patente').val();
                const dni = $('#dniDuenio').val();
                const patenteRegex = /^[A-Z]{3} \d{3}$/;
                const dniRegex = /^\d{7,8}$/;

                if (!patenteRegex.test(patente) || !dniRegex.test(dni)) {
                    event.preventDefault(); // Evitar envío si no es válido
                }
            });
        });
    </script>
</body>

</html>