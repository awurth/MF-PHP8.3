<?php

class Foo
{
    public const string BAR = 'baz';
}

var_dump(Foo::BAR);

// class Bar extends Foo
// {
//     public const int BAR = 42;
// }
//
// var_dump(Bar::BAR);
