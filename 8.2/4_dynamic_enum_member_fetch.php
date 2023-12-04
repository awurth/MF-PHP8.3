<?php

enum FooEnum: string
{
    case Bar = 'bar';
}

$name = 'Bar';

// Will throw a syntax error
$bar = FooEnum::{$name}->value;
var_dump($bar);

// $bar = constant(Foo::class . '::' . $name)->value;
// var_dump($bar);
