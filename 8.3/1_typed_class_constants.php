<?php

interface Foo
{
    public const string BAR = 'baz';
}

var_dump(Foo::BAR);

// class Bar implements Foo
// {
//     public const int BAR = 42;
// }
//
// var_dump(Bar::BAR);
