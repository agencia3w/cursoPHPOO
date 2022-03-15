<?php

namespace app\controllers;

use app\models\activerecord\FindBy;
use app\models\User as ModelsUser;

class User
{
    public string $view;
    public array $data = [];

    public function show($args)
    {
        $user = (new ModelsUser)->execute(new FindBy('id', $args[0]));

        if(!$user){
            throw new \Exception("Usuário não encontrado");
            
        }

        $this->view = 'user.php';
        $this->data = [
            'title' => 'usuários',
            'user' => $user
        ];
    }
}
