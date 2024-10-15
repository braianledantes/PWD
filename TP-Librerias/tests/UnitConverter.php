<?php
require '../configuracion.php';

// https://github.com/jordanbrauer/unit-converter/wiki

use UnitConverter\UnitConverter;

$converter = UnitConverter::createBuilder()
    ->addSimpleCalculator()
    ->addDefaultRegistry()
    ->build();

$r = $converter->convert(1)->from("in")->to("cm"); # (float) 2.54

echo $r;