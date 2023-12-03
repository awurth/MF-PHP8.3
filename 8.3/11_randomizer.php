<?php

use Random\IntervalBoundary;
use Random\Randomizer;

$randomizer = new Randomizer();

$randomBytes = $randomizer->getBytesFromString(string: 'abcdefghijklmnopqrstuvwxyz0123456789', length: 16);

$example = sprintf(
    "%s.example.com",
    $randomBytes,
);
var_dump($example);

$float = $randomizer->getFloat(min: 0, max: 1, boundary: IntervalBoundary::ClosedOpen);
var_dump($float);

$nextFloat = $randomizer->nextFloat();
var_dump($nextFloat);
