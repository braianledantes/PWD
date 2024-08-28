$(document).ready(function() {
    $("form").validate({
        rules: {
            lunes: {
                required: true,
                number: true,
                min: 0
            },
            martes: {
                required: true,
                number: true,
                min: 0
            },
            miercoles: {
                required: true,
                number: true,
                min: 0
            },
            jueves: {
                required: true,
                number: true,
                min: 0
            },
            viernes: {
                required: true,
                number: true,
                min: 0
            }
        },
        messages: {
            lunes: {
                required: "Este campo es obligatorio",
                number: "Por favor, introduce un número válido",
                min: "Por favor, introduce un número positivo"
            },
            martes: {
                required: "Este campo es obligatorio",
                number: "Por favor, introduce un número válido",
                min: "Por favor, introduce un número positivo"
            },
            miercoles: {
                required: "Este campo es obligatorio",
                number: "Por favor, introduce un número válido",
                min: "Por favor, introduce un número positivo"
            },
            jueves: {
                required: "Este campo es obligatorio",
                number: "Por favor, introduce un número válido",
                min: "Por favor, introduce un número positivo"
            },
            viernes: {
                required: "Este campo es obligatorio",
                number: "Por favor, introduce un número válido",
                min: "Por favor, introduce un número positivo"
            }
        },
        errorElement: "div",
        errorPlacement: function(error, element) {
            error.addClass("invalid-feedback");
            element.closest(".mb-3").append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
    });
});