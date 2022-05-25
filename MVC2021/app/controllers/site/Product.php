<?php

namespace app\controllers\site;

class Product
{
    public array $data = [];
    public string $view;
    public string $master = 'index.php';

    public function index(array $args)
    {
        var_dump($args);
        $this->view = 'edit.php';
        $this->data = [
            'title' => 'edit'
        ];
    }

    public function edit(array $args)
    {
        var_dump($args);
        $this->view = 'edit.php';
        $this->data = [
            'title' => 'edit'
        ];
    }
}
