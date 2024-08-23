<?php

$numbers = [3, 5, 1, 7, 9, 2, 8, 10, 4, 6];

$max = 0;
foreach ($numbers as $number) {
    if ($number > $max) {
        $max = $number;
    }
}

echo "El numero mas grande es: $max";
