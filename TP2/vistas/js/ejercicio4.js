$(document).ready(function() {
    $("form").validate({
        rules: {
            titulo: {
                required: true
            },
            actores: {
                required: true
            },
            director: {
                required: true
            },
            guion: {
                required: true
            },
            produccion: {
                required: true
            },
            anio: {
                required: true,
                maxlength: 4,
                digits: true
            },
            nacionalidad: {
                required: true
            },
            genero: {
                required: true
            },
            duracion: {
                required: true,
                maxlength: 3,
                digits: true
            },
            sinopsis: {
                required: true
            }
        },
        messages: {
            titulo: {
                required: "El campo es requerido"
            },
            actores: {
                required: "El campo es requerido"
            },
            director: {
                required: "El campo es requerido"
            },
            guion: {
                required: "El campo es requerido"
            },
            produccion: {
                required: "El campo es requerido"
            },
            anio: {
                required: "El campo es requerido",
                maxlength: "El campo debe tener como máximo 4 caracteres",
                digits: "El campo debe ser un número"
            },
            nacionalidad: {
                required: "El campo es requerido"
            },
            genero: {
                required: "El campo es requerido"
            },
            duracion: {
                required: "El campo es requerido",
                maxlength: "El campo debe tener como máximo 3 caracteres",
                digits: "El campo debe ser un número"
            },
            sinopsis: {
                required: "El campo es requerido"
            }
        },
        errorElement: "div",
        errorPlacement: function(error, element) {
            error.addClass("invalid-feedback");
            error.insertAfter(element);
        },
        highlight: function(element, errorClass, validClass) {
            $(element).addClass("is-invalid").removeClass("is-valid");
        },
        unhighlight: function(element, errorClass, validClass) {
            $(element).removeClass("is-invalid");
        }
    })
});