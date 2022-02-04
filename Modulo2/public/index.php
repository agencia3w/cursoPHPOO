<?php

declare(strict_types=1);

class Login
{
    private User $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function login(string $email, string $password)
    {
        $validate = new ValidateData;
        $valid = $validate->validate([
            'firstName' => 'required',
            'email' => 'required'
        ]);

        if(!$valid){

        }

        return 'fazendo login';
    }
}

abstract class Model
{
    public function find(string $field, string $value)
    {
        return 'find';
    }
}

class User
{
}

class ValidateData
{
    public function validate(array $data)
    {
    }
}

$login = new Login(new User);
echo $login->login('paulinho@agencia3w.com.br', '2222');