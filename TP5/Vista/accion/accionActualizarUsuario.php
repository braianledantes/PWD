<?php
include_once "../../configuracion.php";

$datos = data_submitted();
$abmUsuario = new AbmUsuario();

$usuarioBuscado = ['idusuario' => $datos['idusuario']];
$listaUsuario = $abmUsuario->buscar($usuarioBuscado);

$objUsuario = $listaUsuario[0];

$datos['usdeshabilitado'] = $objUsuario->getUsDeshabilitado();

$abmUsuario->modificar($datos);
header('Location: ../listarUsuario.php');
?>