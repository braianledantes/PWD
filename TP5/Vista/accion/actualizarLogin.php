<?php
include_once '../../configuracion.php';

$datos = data_submitted();
$abmUsuario = new AbmUsuario();

$listaUsuario = $abmUsuario->buscar($datos);
$objUsuario = $listaUsuario[0];

if (isset($_GET['message'])) {
    print '<script type="text/javascript">alert("' . $_GET['message'] . '");</script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados | TP4</title>
    <?php include_once '../estructura/bootstrap.php'; ?>
</head>

<body>

    <?php include_once '../estructura/header.php'; ?>

    <div class="container">
    <form method="post" action="accionActualizarUsuario.php">
        <div class="col-md-4">
            <div class="form-floating mb-3">
                <?php
                echo "<input class='form-control' id='idusuario' name='idusuario' type='hidden' value='{$datos['idusuario']}'>";
                ?>
            </div>
        </div>

        <div class="form-floating col-md-4 mb-3">
            <?php
            echo "<input class='form-control' id='usuarioNuevo' name='usnombre' type='text' placeholder='Nuevo usuario' value='{$objUsuario->getUsNombre()}' maxlength='50' required>";
            ?>
            <label for="emailNuevo">Ingrese su nuevo usuario</label>
        </div>

        <div class="form-floating col-md-4 mb-3">
            <?php
            echo "<input class='form-control' id='emailNuevo' name='usmail' type='text' placeholder='Nuevo email' value='{$objUsuario->getUsMail()}' maxlength='254' required>";
            ?>
            <label for="emailNuevo">Ingrese su nuevo email</label>
        </div>


        <div class="form-floating col-md-4 mb-3">
            <?php
            echo "<input class='form-control' id='passwordNueva' name='uspass' type='password' placeholder='Contraseña nueva' value='{$objUsuario->getUsPass()}' maxlength='16' required>";
            ?>
            <label for="emailNuevo">Ingrese su nueva contraseña</label>
        </div>

        <div class="col-md-4">
            <div class="d-grid">
                <button class="btn btn-primary" type="submit" value="Editar">Actualizar :)</button>
            </div>
        </div>
    </form>
</div>

</body>

</html>
