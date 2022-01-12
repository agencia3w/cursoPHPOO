<?php

declare(strict_types=1);

require '../vendor/autoload.php';

class Person
{
    public static function info()
    {
        return 'Person info';
    }
}

class User extends Person
{
    public function teste()
    {
        return parent::info();
    }
}

echo (new User)->teste();