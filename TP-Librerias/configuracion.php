<?php 
/////////////////////////////
// CONFIGURACION APP//
/////////////////////////////

//variable que almacena el directorio del proyecto
$GLOBALS['ROOT'] = $_SERVER['DOCUMENT_ROOT'] . "/PWD/TP-Librerias/";

// trae las librerias de composer
require "vendor/autoload.php";

include_once('utiles/funciones.php');

// Carga las variables de entorno
$dotenv = Dotenv\Dotenv::createImmutable($GLOBALS['ROOT']);
$dotenv->load();