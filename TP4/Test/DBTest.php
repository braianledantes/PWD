<?php
require_once '../Modelo/DataBase.php';

$db = new DataBase();

$autosDao = $db->getAutoDao();
$personaDao = $db->getPersonaDao();



$autosDao->deleteAuto('ADC 153');
// $autosDao->insertAuto(new Auto('asdf 1234', 'Ford', 'Fiesta', 28326986));

$autoGet = $autosDao->getAuto('ADC 1522');
echo '<pre>';
print_r($autoGet);
echo '</pre>';


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