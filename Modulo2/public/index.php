<?php

declare(strict_types=1);

require '../vendor/autoload.php';

class User
{
    public static string $name;

    public static function userInfo()
    {
        return 'teste método estático';
    }
}

User::$name = 'Paulinho';

echo User::userInfo();
echo User::$name;