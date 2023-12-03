<?php

interface I
{
    public const string FOO = 'foo';
}

class C implements I
{
    private const string FOO = 'foo';
}
