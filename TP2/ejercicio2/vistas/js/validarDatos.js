$(document).ready(function() {
    $("form").validate({
        rules: {
            nombre: {
                required: true,
                minlength: 3
            },
            apellido: {
                required: true,
                minlength: 3
            },
            edad: {
                required: true,
                number: true,
                min: 0
            },
            direccion: {
                required: true,
                minlength: 3
            }
        },
        messages: {
            nombre: {
                required: "Por favor, ingrese su nombre.",
                minlength: "El nombre debe tener al menos 3 caracteres."
            },
            apellido: {
                required: "Por favor, ingrese su apellido.",
                minlength: "El apellido debe tener al menos 3 caracteres."
            },
            edad: {
                required: "Por favor, ingrese su edad.",
                number: "Por favor, ingrese un número válido.",
                min: "Por favor, ingrese un número mayor o igual a 0."
            },
            direccion: {
                required: "Por favor, ingrese su dirección.",
                minlength: "La dirección debe tener al menos 3 caracteres."
            }
        },
        errorElement: "div",
        errorPlacement: function(error, element) {
            error.addClass("invalid-feedback");
            element.closest(".mb-3").append(error);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        }
    });
});