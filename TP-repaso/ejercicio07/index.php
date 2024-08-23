<?php

// dado un array de 20 elementos que consiste en numeros reales
// (con coma decimal) y que cada elemetno representa la venta del
// dia de un comercio. Calcular el promedio de las ventas utilizando
// alguna estructura iterativa.

$ventas = [
    100.5, 200.3, 300.2, 400.1, 500.4, 600.5, 700.6, 800.7, 900.8, 1000.9,
    1100.1, 1200.2, 1300.3, 1400.4, 1500.5, 1600.6, 1700.7, 1800.8, 1900.9, 2000.0
];

$suma = 0;
foreach ($ventas as $venta) {
    $suma += $venta;
}

$promedio = $suma / count($ventas);

echo "El promedio de las ventas es: $promedio";