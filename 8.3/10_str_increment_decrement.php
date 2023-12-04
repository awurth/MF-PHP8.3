<?php

$str = 'ABC';

// Returns the incremented alphanumeric ASCII string
var_dump(str_increment(string: $str)); // ABD

// Returns the decremented alphanumeric ASCII string
var_dump(str_decrement(string: $str)); // ABB

// Non-ASCII characters are not supported and will throw an error
var_dump(str_increment(string: '▶▶❤❓❇❤')); // Fatal error: Uncaught ValueError: str_increment(): Argument #1 ($string) must be composed only of alphanumeric ASCII characters
