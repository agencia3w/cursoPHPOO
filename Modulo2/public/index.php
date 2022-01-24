<?php

declare(strict_types=1);

class User
{
    private string $firstName;
    private string $lastName;
    private string $email;

    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function __invoke()
    {
        return 'invoke';
    }

    public function __toString()
    {
        return "Olá, meu nome é {$this->firstName} {$this->lastName} e email {$this->email}";
    }
}

$user = new User;
$user->setFirstName('Paulo');
$user->setLastName('Neto');
$user->setEmail('paulinho@agencia3w.com.br');
echo $user;
echo $user();