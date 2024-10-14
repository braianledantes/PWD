<?php
require '../configuracion.php';

// https://github.com/vlucas/phpdotenv

use Dotenv\Dotenv;

echo $_SESSION['ROOT'] . "\n";

$dotenv = Dotenv::createImmutable($_SESSION['ROOT']);
$dotenv->load();

$s3_bucket = $_ENV['S3_BUCKET'];
$s3_bucket = $_SERVER['S3_BUCKET'];

echo $s3_bucket . "\n";