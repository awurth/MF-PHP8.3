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


// $float = $randomizer->getFloat(min: 0, max: 1, boundary: IntervalBoundary::ClosedOpen);
// var_dump($float);
//
// $nextFloat = $randomizer->nextFloat();
// var_dump($nextFloat);


// For the latitude the value may be both -90 and 90.
// For the longitude the value may be 180, but not -180, because
// -180 and 180 refer to the same longitude.
// printf(
//     "Lat: %+.6f Lng: %+.6f",
//     $randomizer->getFloat(min: -90, max: 90, boundary: IntervalBoundary::ClosedClosed),
//     $randomizer->getFloat(min: -180, max: 180, boundary: IntervalBoundary::OpenClosed),
// );
