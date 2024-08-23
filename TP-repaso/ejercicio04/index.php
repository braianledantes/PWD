<?php

$a = 15;
$b = 94;
$c = 73;

$arr = array($a, $b, $c);

// ordena el array de menor a mayor
sort($arr);

// obtiene el valor mayor y menor
$mayor = end($arr);
$menor = reset($arr);

echo "El mayor de " . implode(", ", $arr) . " es $mayor y el menor es $menor";
