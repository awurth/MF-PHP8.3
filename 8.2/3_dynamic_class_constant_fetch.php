<?php

class Foo
{
    public const BAR = 'bar';
}

$name = 'BAR';

$bar = Foo::{$name};

var_dump($bar);

// $bar = constant(Foo::class . '::' . $name);
//
// var_dump($bar);
