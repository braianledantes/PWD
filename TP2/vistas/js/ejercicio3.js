// agrega funcionalidad de validación al formulario para 
        // que el campo password sea dintinto al campo username
        $.validator.addMethod("notEqualTo", function(value, element, param) {
            return this.optional(element) || value !== $(param).val();
        }, "Tiene que tener un valor diferente...");

        $.validator.addMethod("lettersAndNumbers", function(value, element) {
            return this.optional(element) || (/^[a-zA-Z]/.test(value) && /[0-9]/.test(value));
        }, "Debe contener letras y números");

        $(document).ready(function() {
            $("form").validate({
                rules: {
                    username: {
                        required: true,
                        minlength: 4
                    },
                    password: {
                        required: true,
                        minlength: 8,
                        notEqualTo: "#username",
                        lettersAndNumbers: true
                    }
                },
                messages: {
                    username: {
                        required: "El campo es requerido",
                        minlength: "El campo debe tener al menos 4 caracteres"
                    },
                    password: {
                        required: "El campo es requerido",
                        minlength: "El campo debe tener al menos 8 caracteres",
                        notEqualTo: "El campo debe ser diferente al campo username",
                        lettersAndNumbers: "Debe contener letras y números"
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
            });
        });