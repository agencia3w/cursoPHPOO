<?php

namespace app\controllers\admin;

use app\interfaces\ControllerMethodsInterface;

class Home implements ControllerMethodsInterface
{
    public $data = [];
    public $view;
    public $master;

    public function index(array $args)
    {
        $this->data = [
            'title' => 'Admin'
        ];
        $this->view = 'admin/home.php';
        $this->master = 'admin/index.php';
    }

    public function show(array $args)
    {
        
    }

    public function store()
    {
        
    }

    public function edit(array $args)
    {
        
    }

    public function update(array $args)
    {
        
    }

    public function destroy(array $args)
    {
        
    }
    
}