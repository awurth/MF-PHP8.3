<?php

/*
function str_pad(
    string $string,
    int $length,
    string $pad_string = " ",
    int $pad_type = STR_PAD_RIGHT,
): string {}
*/

$string = str_pad(
    string: '▶▶',
    length: 6,
    pad_string: '❤❓❇',
);

var_dump($string); // ▶▶
