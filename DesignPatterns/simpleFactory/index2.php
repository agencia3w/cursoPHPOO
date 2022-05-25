<?php

interface LoginFactoryInterface
{
    public function logar(string $email, string $password);
}

class LoginFactory
{
    public static function make(string $type) : LoginFactoryInterface
    {
        switch ($type) {
            case 'admin':
                return new Admin();
                break;
            
            case 'user':
                return new User();
                break;
            default:
                throw new Exception("Classe do tipo {$type} não existe");
                break;
        }
    }
}

class Admin implements LoginFactoryInterface
{
    public function logar(string $email, string $password)
    {
        return "login admin {$email} - {$password}";
    }
}

class User implements LoginFactoryInterface
{
    public function logar(string $email, string $password)
    {
        return "login admin {$email} - {$password}";
    }
}

var_dump(LoginFactory::make('admin')->logar('paulinho@agencia3w.com.br', 123456));