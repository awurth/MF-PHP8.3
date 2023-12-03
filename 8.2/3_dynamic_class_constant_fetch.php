<?php

class Foo
{
    public const BAR = 'bar';
}

$name = 'BAR';

// Will throw a syntax error
$bar = Foo::{$name};
var_dump($bar);

// $bar = constant(Foo::class . '::' . $name);
// var_dump($bar);
