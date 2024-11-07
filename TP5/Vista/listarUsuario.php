<?php
include_once '../configuracion.php';
include_once '../Control/AbmUsuario.php';

$abmUsuario = new AbmUsuario();
$lista = $abmUsuario->buscar(null);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios Registrados | TP4</title>
    <?php include_once './estructura/bootstrap.php'; ?>
</head>

<body>

    <?php include_once './estructura/header.php'; ?>

    <div class="container">
        <h1>Lista de Usuarios Registrados</h1>

        <table class="table table-striped border">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Contraseña</th>
                    <th>Email</th>
                    <th>Deshabilitado</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $var) : ?>
                    <tr>
                        <td class='text-center'><?= $var->getIdUsuario() ?></td>
                        <td class='text-center'><?= $var->getUsNombre() ?></td>
                        <td class='text-center'><?= $var->getUsPass() ?></td>
                        <td class='text-center'><?= $var->getUsMail() ?></td>
                        <td class='text-center'>
                            <?= $var->getUsDeshabilitado() ? 
                            "<i class='fas fa-check-circle'></i>" : 
                            "<i class='fas fa-times-circle'></i>" ?>
                        </td>
                        <td class='text-center'>
                            <!--Actualizar datos-->
                            <form method='post' action='./accion/actualizarLogin.php' style="display:inline;">
                                <input name='idusuario' type='hidden' value='<?= $var->getIdUsuario() ?>'>
                                <button class='btn btn-warning btn-sm' type='submit'>
                                    <i class='fas fa-user-edit'></i> Editar
                                </button>
                            </form>

                            <!--Realizar Borrado-->
                            <form method='post' action='./accion/eliminarLogin.php' style="display:inline;">
                                <input name='id_usuario' type='hidden' value='<?= $var->getIdUsuario() ?>'>
                                <button class='btn btn-warning btn-sm' type='submit'>
                                    <?= $var->getUsDeshabilitado() ? 
                                    "<i class='fas fa-toggle-on'></i> Activar" : 
                                    "<i class='fas fa-toggle-off'></i> Deshabilitar" ?>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

</body>

</html>