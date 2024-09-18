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

    // Validación de Marca
    $('#marca').on('input', function() {
        const marca = $(this).val();
        if (marca.trim() === '') {
            $('#marcaError').text('La marca es obligatoria.').show();
            $(this).addClass('invalid');
        } else {
            $('#marcaError').hide(); 
            $(this).removeClass('invalid');
        }
    });

    // Validación de Modelo (debe ser numérico)
    $('#modelo').on('input', function() {
        const modelo = $(this).val();
        const modeloRegex = /^\d+$/; // Solo números

        if (!modeloRegex.test(modelo)) {
            $('#modeloError').text('El modelo debe ser numérico.').show();
            $(this).addClass('invalid');
        } else {
            $('#modeloError').hide(); 
            $(this).removeClass('invalid');
        }
    });

    // Validación de DNI
    $('#dniDuenio').on('input', function() {
        const dni = $(this).val();
        const dniRegex = /^\d{7,8}$/; // Formato DNI (7 u 8 dígitos)

        if (!dniRegex.test(dni)) {
            $('#dniError').text('El DNI debe tener 7 u 8 dígitos.').show();
            $(this).addClass('invalid');
        } else {
            $('#dniError').hide(); 
            $(this).removeClass('invalid');
        }
    });

    // Prevención de envío si hay errores
    $('#nuevoAutoForm').on('submit', function(event) {
        const patente = $('#patente').val();
        const marca = $('#marca').val();
        const modelo = $('#modelo').val();
        const dni = $('#dniDuenio').val();
        const patenteRegex = /^[A-Z]{3} \d{3}$/;
        const marcaEmpty = marca.trim() === '';
        const modeloRegex = /^\d+$/;
        const dniRegex = /^\d{7,8}$/;

        if (!patenteRegex.test(patente) || marcaEmpty || !modeloRegex.test(modelo) || !dniRegex.test(dni)) {
            event.preventDefault(); // Evitar envío si no es válido
        }
    });
});
