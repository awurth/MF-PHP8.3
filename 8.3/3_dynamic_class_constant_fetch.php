<?php

class Foo
{
    public const string BAR = 'bar';
}

$name = 'BAR';

$bar = Foo::{$name};

var_dump($bar);
