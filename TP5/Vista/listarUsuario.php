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
                        <td class='text-center'><?= $var->getUsuarioNombre() ?></td>
                        <td class='text-center'><?= $var->getUsuarioPassword() ?></td>
                        <td class='text-center'><?= $var->getUsuarioEmail() ?></td>
                        <td class='text-center'>
                            <?= $var->getUsuarioDeshabilitado() ? "<i class='fas fa-check-circle'></i>" : "<i class='fas fa-times-circle'></i>" ?>
                        </td>
                        <td class='text-center'>
                            <form method='post' action='actualizarUsuario.php' style="display:inline;">
                                <input name='id_usuario' type='hidden' value='<?= $var->getIdUsuario() ?>'>
                                <button class='btn btn-warning btn-sm' type='submit'>
                                    <i class='fas fa-user-edit'></i>
                                </button>
                            </form>
                            <form method='post' action='eliminarUsuario.php' style="display:inline;">
                                <input name='id_usuario' type='hidden' value='<?= $var->getIdUsuario() ?>'>
                                <button class='btn btn-warning btn-sm' type='submit'>
                                    <?= $var->getUsuarioDeshabilitado() ? "<i class='fas fa-toggle-on'></i>" : "<i class='fas fa-toggle-off'></i>" ?>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

</body>

</html>