<?php

// class Foo
// {
//     public int $bar = 10;
//     public string $baz = 'baz';
// }

// $serialized = serialize(new Foo());
$serialized = 'O:3:"Foo":2:{s:3:"bar";i:10;s:3:"baz";s:3:"baz";}';

$unserialized = unserialize(data: $serialized);

var_dump($unserialized);
