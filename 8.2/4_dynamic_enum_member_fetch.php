<?php

enum FooEnum: string
{
    case Bar = 'bar';
}

$name = 'Bar';

$bar = FooEnum::{$name}->value;

var_dump($bar);

// $bar = constant(Foo::class . '::' . $name)->value;
//
// var_dump($bar);
