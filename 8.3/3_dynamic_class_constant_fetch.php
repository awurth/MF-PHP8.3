<?php

class Foo
{
    public const BAR = 'bar';
}

$name = 'BAR';

$bar = Foo::{$name};

var_dump($bar);
