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
