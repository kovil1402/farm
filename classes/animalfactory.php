<?php

namespace Farm;

class AnimalFactory
{
    public static function createChicken()
    {
        return new Chicken;
    }

    public static function createCow()
    {
        return new Cow;
    }
}
