<?php

$class = new readonly class {
    public function __construct(
        public string $foo = 'bar',
    ) {}
};

$instance = new $class();

var_dump($class->foo); // bar
