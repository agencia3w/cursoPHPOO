<?php

namespace app;

class Counter
{
    protected static $counter = 0;

    public static function addCounter(int $number)
    {
        self::$counter += $number;
    }

    public static function getCounter(){
        return self::$counter;
    }
}