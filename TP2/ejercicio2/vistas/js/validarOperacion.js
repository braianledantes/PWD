$(document).ready(function() {
    $("form").validate({
        rules: {
            valor1: {
                required: true,
                number: true
            },
            valor2: {
                required: true,
                number: true
            }
        },
        messages: {
            valor1: {
                required: "Por favor, ingrese un número.",
                number: "Por favor, ingrese un número válido."
            },
            valor2: {
                required: "Por favor, ingrese un número.",
                number: "Por favor, ingrese un número válido."
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