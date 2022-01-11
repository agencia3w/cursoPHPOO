<?php

namespace app\classes;

class Login
{
    public string $email;
    public string $password;

    public function auth(Crud $crud): string
    {
        return 'O meu email é ' . $this->email . ' e minha senha é ' . $this->password;
    }
}
