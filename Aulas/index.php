<?php

require "vendor/autoload.php";


class Controller
{
    public function make()
    {
        if (!$this->controllerExist()) {
            throw new ControllerNotExistsException;
        }

        if (!$this->methodExist()) {
            throw new MethodNotExistsException;
        }

        return 'controller';
    }

    private function controllerExist()
    {
        return true;
    }

    private function methodExist()
    {
        return false;
    }
}

class ControllerNotExistsException extends Exception
{
    public function message()
    {
        return "Erro ao criar o controller";
    }
}

class MethodNotExistsException extends Exception
{
    public function message()
    {
        return "Método não existe";
    }
}

try {
    $controller = new Controller;
    $controller->make();
} catch (Exception $e) {
    var_dump($e->message());
}
