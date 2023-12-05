<?php

$valid = json_validate(json: '
    {
        "foo": "bar",
        "bar": [
            "foo",
            "bar"
        ],
        "baz": {
            "foo": "bar"
        }
    }
');

var_dump($valid); // true

$invalid = json_validate(json: '
    {
        "foo": "bar",
    }
');

var_dump($invalid); // false
var_dump(json_last_error(), json_last_error_msg()); // JSON_ERROR_SYNTAX, Syntax error

// Calling json_validate() immediately before json_decode() will unnecessarily parse the string twice,
// as json_decode() implicitly performs validation during decoding.
//
// json_validate() should therefore only be used if the decode JSON payload is not immediately used
// and knowing whether the string contains valid JSON is needed.
