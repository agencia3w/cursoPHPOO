<?php

require "vendor/autoload.php";

interface LoginInterface
{
    public function login();
}

abstract class Login{
    abstract public function logar();
}

class LoginUser implements LoginInterface{
    public function login()
    {

    }
}

$login = new LoginUser;