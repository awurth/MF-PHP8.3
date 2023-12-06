<?php

try {
    $range = range(start: [], end: new stdClass());
} catch (TypeError $e) {
    var_dump($e);
}

// try {
//     $range = range(start: 1, end: 10, step: 0);
// } catch (ValueError $e) {
//     var_dump($e);
// }

// try {
//     $range = range(start: 1, end: 10, step: -1);
// } catch (ValueError $e) {
//     var_dump($e);
// }

// $range = range(start: 'ab', end: 'cd'); // Warning: range(): Argument #1 ($start) must be a single byte, subsequent bytes are ignored
// var_dump($range);
