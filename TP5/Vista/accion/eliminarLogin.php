<?php
include_once '../../configuracion.php';

$datos = data_submitted();
$abmUsuario = new AbmUsuario();
$listaUsuario = $abmUsuario->buscar($datos);
$id = $datos['idusuario'];
$objUsuario = $listaUsuario[0];

$datos['usuario_nombre'] = $objUsuario->getUsNombre();
$datos['usuario_password'] = $objUsuario->getUsPass();
$datos['usuario_email'] = $objUsuario->getUsMail();

if ($objUsuario->getUsDeshabilitado()) {
    $datos['usdeshabilitado'] = 0;
} else {
    $datos['usdeshabilitado'] = 1;
}
// $datos['usuario_deshabilitado'] = true;

$exito = $abmUsuario->modificar($datos);
header('Location: ../listarUsuario.php');

?>