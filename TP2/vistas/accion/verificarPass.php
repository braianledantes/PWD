<?php

include_once '../../control/Usuarios.php';

// arreglo asociativo de usuarios que contiene los usuarios y sus contraseñas
$usuarios = new Usuarios();

// obtiene los datos enviados por el formulario
$username = $_POST['username'];
$password = $_POST['password'];

// verifica si el usuario existe y si la contraseña es correcta
if ($usuarios->login($username, $password)) {
    echo "<h1> Welcome $username</h1>";
} else {
    echo 'Login failed';
}

?>

