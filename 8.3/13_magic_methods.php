<?php

class Foo
{
    public function __call($name, $args)
    {
        var_dump($name, $args);
    }
}

$foo = new Foo();

$closure = $foo->magic(...);

$closure(a: 'hello', b: 'world');
