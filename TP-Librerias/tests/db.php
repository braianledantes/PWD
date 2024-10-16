<?php
require '../configuracion.php';
echo "Probando la carga de variables de entorno\n";

$db = new DataBase();


$autosDao = $db->getAutoDao();
$personaDao = $db->getPersonaDao();


$autos = $autosDao->getAutos();

echo '<pre>';
print_r($autos);
echo '</pre>';

// $p1 = $personaDao->getPersona(28326986);
// echo '<pre>';
// print_r($p1);
// echo '</pre>';

// $personas = $personaDao->getPersonas();
// echo '<pre>';
// print_r($personas);
// echo '</pre>';