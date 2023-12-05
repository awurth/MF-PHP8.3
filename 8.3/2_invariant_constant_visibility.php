<?php

interface I
{
    public const string FOO = 'foo';
}

class C implements I
{
    private const string FOO = 'foo'; // Fatal error: Access level to C::FOO must be public (as in interface I)
}
