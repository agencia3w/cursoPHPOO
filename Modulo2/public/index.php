<?php

declare(strict_types=1);

require '../vendor/autoload.php';

class User
{
    public static function info()
    {
        return __CLASS__;
    }

    public function teste(){
        return self::info();
    }
}

class User2 extends User{
    public static function info()
    {
        return __CLASS__;
    }
}

echo User::info();
$user2 = new User2;
echo $user2->teste();