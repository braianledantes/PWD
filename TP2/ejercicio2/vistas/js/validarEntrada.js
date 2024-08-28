$(document).ready(function() {
    $("form").validate({
        rules: {
            edad: {
                required: true,
                number: true,
                min: 0,
                max: 150
            }
        },
        messages: {
            edad: {
                required: "Por favor, ingrese la edad.",
                number: "Por favor, ingrese un número.",
                min: "Por favor, ingrese un número mayor o igual a 0.",
                max: "Por favor, ingrese un número menor o igual a 150."
            }
        }
    });
});