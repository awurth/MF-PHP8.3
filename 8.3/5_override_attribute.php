<?php

abstract class Foo
{
    public function methodWithDefaultImplementation(): int
    {
        return 1;
    }
}

final class Bar extends Foo
{
    #[Override]
    public function methodWithDefaultImplementation(): int
    {
        return 2;
    }
}
