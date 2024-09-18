$(document).ready(function() {
    $('#miFormulario').validate({
        rules: {
            dni: {
                required: true,
                digits: true,
                minlength: 7,
                maxlength: 8
            },
            nombre: {
                required: true,
                minlength: 2,
                pattern: /^[A-Za-záéíóúÁÉÍÓÚñÑ]+$/ // Solo letras
            },
            apellido: {
                required: true,
                minlength: 2,
                pattern: /^[A-Za-záéíóúÁÉÍÓÚñÑ]+$/ 
            },
            fechaNac: {
                required: true,
                date: true
            },
            telefono: {
                required: true,
                digits: true,
                minlength: 10
            },
            domicilio: {
                required: true,
                minlength: 5
            }
        },
        messages: {
            dni: {
                required: 'Por favor, ingresa el DNI.',
                digits: 'El DNI debe contener solo números.',
                minlength: 'El DNI debe tener al menos 7 dígitos.',
                maxlength: 'El DNI no puede tener más de 8 dígitos.'
            },
            nombre: {
                required: 'Por favor, ingresa tu nombre.',
                minlength: 'El nombre debe tener al menos 2 caracteres.',
                pattern: 'El nombre solo puede contener letras.'
            },
            apellido: {
                required: 'Por favor, ingresa tu apellido.',
                minlength: 'El apellido debe tener al menos 2 caracteres.',
                pattern: 'El apellido solo puede contener letras.'
            },
            fechaNac: {
                required: 'Por favor, ingresa tu fecha de nacimiento.',
                date: 'Por favor, ingresa una fecha válida.'
            },
            telefono: {
                required: 'Por favor, ingresa tu teléfono.',
                digits: 'El teléfono debe contener solo números.',
                minlength: 'El teléfono debe tener al menos 10 dígitos.'
            },
            domicilio: {
                required: 'Por favor, ingresa tu domicilio.',
                minlength: 'El domicilio debe tener al menos 5 caracteres.'
            }
        },
        highlight: function(element) {
            $(element).css({
                'border': '1px solid #8B0000', 
                'background-color': 'rgba(255, 182, 193, 0.5)', 
                'box-shadow': '0 0 5px rgba(139, 0, 0, 0.5)' 
            });
            $(element).next('label.error').css({
                'color': '#8B0000', 
                'font-style':'italic',
                'font-size': '0.9em' 
            });
        },
        unhighlight: function(element) {
            $(element).css({
                'border': '',
                'background-color': '', 
                'box-shadow':''
            });
            $(element).next('label.error').css('color', ''); // Restaurar color del mensaje
        },
        errorPlacement: function(error, element) {
            error.insertAfter(element);
        }
    });

    // Validación en tiempo real
    $('input').on('keyup', function() {
        $(this).valid(); // Validar el campo actual
    });

    // Método personalizado para validar que el campo contenga solo letras
    jQuery.validator.addMethod("pattern", function(value, element, param) {
        return this.optional(element) || param.test(value);
    }, "Por favor ingrese un valor válido.");
});


