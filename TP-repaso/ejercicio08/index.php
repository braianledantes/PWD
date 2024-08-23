<?php

$nombres = array("roberto", "juan", "marta", "maria", "martin", "jorge", "miriam", "nahuel", "mirta", "walter");

$nombresConM = [];

foreach ($nombres as $nombre) {
    if (strpos($nombre, "m") === 0) {
        $nombresConM[] = $nombre;
    }
}

echo "Nombres que empiezan con la letra 'm': <br>";
foreach ($nombresConM as $nombre) {
    echo "$nombre <br>";
}