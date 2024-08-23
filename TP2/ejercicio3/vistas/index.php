<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 | TP2"</title>

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="bg-secondary">
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col" style="max-width: 400px;">
                <form class="container bg-white border rounded shadow p-4" action="accion/verificarPass.php" method="post">
                    <div class="row mb-4">
                        <h2 class="text-center">Member Login</h2>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="bi bi-person-fill"></i></span>
                            <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="username" id="username">
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon2"><i class="bi bi-lock-fill"></i></span>
                            <input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" name="password" id="password">
                        </div>
                    </div>

                    <div class="row mb-4 mx-1">
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- jquery and jquery-validator -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>

    <script>
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
    </script>
</body>

</html>