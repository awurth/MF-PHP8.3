<?php

$valid = json_validate('
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

var_dump($valid);

$invalid = json_validate('
    {
        "foo": "bar",
    }
');

var_dump($invalid);
