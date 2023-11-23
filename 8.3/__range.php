<?php

try {
    $range = range(start: [], end: new stdClass());
} catch (Throwable $e) {
    var_dump($e);
}

// try {
//     $range = range(start: 1, end: 10, step: 0);
// } catch (Throwable $e) {
//     var_dump($e);
// }

// try {
//     $range = range(start: 1, end: 10, step: -1);
// } catch (Throwable $e) {
//     var_dump($e);
// }

// $range = range(start: 'ab', end: 'cd');
// var_dump($range);
