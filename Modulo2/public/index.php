<?php

declare(strict_types=1);

class Address{
    public string $street;
    public string $city;

    public function __clone()
    {
        var_dump('executou o clone da classe Address');
    }
}

class User{
    public string $name = 'Paulo';
    public int $age = 38;
    public Address $address;

    public function __construct(Address $address)
    {
        $this->address = $address;
    }

    public function __clone()
    {
        var_dump('executou o clone');
        $this->address = clone $this->address;
        $this->age = 40;
    }
}

$address = new Address;
$address->city = 'Feira';
$address->street = 'Rua';
$user = new User($address);

$user1 = clone $user;

$user1->name = 'Paulinho';

var_dump($user);
var_dump($user1);