<?php

declare(strict_types=1);

require '../vendor/autoload.php';

class User
{
    public static function info()
    {
        return __CLASS__;
    }

    public static function teste()
    {
        var_dump('self '. self::info());
        var_dump('static '.static::info());
    }
}

class User2 extends User
{
    public static function info()
    {
        return __CLASS__;
    }
}

echo User2::teste();
