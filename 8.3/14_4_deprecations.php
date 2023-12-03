<?php

// get_class and get_parent_class without arguments
abstract class Foo
{
}

final class Bar extends Foo
{
    public static function getParentClass(): string
    {
        return get_parent_class();
    }

    public static function getClass(): string
    {
        return get_class();
    }
}

var_dump(Bar::getClass());
var_dump(Bar::getParentClass());
