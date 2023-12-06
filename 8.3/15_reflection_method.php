<?php

class Foo
{
    public function bar(): int
    {
        return 1;
    }
}

$class = new ReflectionClass(Foo::class);
$method = $class->getMethod('bar');
var_dump($method);

$method = new ReflectionMethod(objectOrMethod: new Foo(), method: 'bar');
var_dump($method);

$method = ReflectionMethod::createFromMethodName('Foo::bar');
var_dump($method);
