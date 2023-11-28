<?php

use Random\IntervalBoundary;
use Random\Randomizer;

$randomizer = new Randomizer();

$randomBytes = $randomizer->getBytesFromString(string: 'abcdefghijklmnopqrstuvwxyz0123456789', length: 16);

printf(
    "%s.example.com",
    $randomBytes,
);

$float = $randomizer->getFloat(min: 0, max: 1, boundary: IntervalBoundary::ClosedOpen);

$nextFloat = $randomizer->nextFloat();
