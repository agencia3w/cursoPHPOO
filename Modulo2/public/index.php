<?php

use app\classes\Person;

require '../vendor/autoload.php';

class User
{
    public string $name;
    public int $age;

    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getUserInfo()
    {
        return $this->name . ', ' . $this->age;
    }
}

class User2 extends User
{
    public function __construct(string $name, int $age)
    {
        parent::__construct($name, $age);
    }
}

$user = new User2('Paulinho', 38);
echo $user->getUserInfo();
