<?php

$invalid = json_decode(json: '
    {
        "foo": "bar",
    }
');

var_dump($invalid); // null
