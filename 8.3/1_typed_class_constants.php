<?php

interface Foo
{
    public const string BAR = 'baz';
}

var_dump(Foo::BAR); // baz

// class Bar implements Foo
// {
//     public const int BAR = 42; // Fatal error: Type of Bar::BAR must be compatible with Foo::BAR of type string
// }
//
// var_dump(Bar::BAR);
