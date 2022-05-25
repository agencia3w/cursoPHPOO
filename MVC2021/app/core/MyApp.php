<?php

namespace app\core;

use app\interfaces\ControllerInterface;

class MyApp
{
    private $controllerInterface;
    private $controller;

    public function __construct(ControllerInterface $controllerInterface)
    {
        $this->controllerInterface = $controllerInterface;
    }

    public function controller()
    {
        $controller = $this->controllerInterface->controller();
        $method = $this->controllerInterface->method($controller);
        $params = $this->controllerInterface->params();

        $this->controller = new $controller;
        $this->controller->$method($params);
    }

    public function view()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            if (!isset($this->controller->data)) {
                throw new \Exception("A propriedade data é obrigatória");
            
            }
            if (!isset($this->controller->master)) {
                throw new \Exception("A propriedade master é obrigatória");
            }

            if (!array_key_exists('title', $this->controller->data)) {
                throw new \Exception("A propriedade título é obrigatória em data");
            }

            extract($this->controller->data);
            require '../app/views/'. $this->controller->master;
        }
    }
}
