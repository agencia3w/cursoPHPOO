<?php

namespace app\controllers\portal;

use app\controllers\ContainerController;
use app\models\portal\User;

class HomeController extends ContainerController
{
    public function index(){
        $user = new User;

        $users = $user->all();

        $this->view([
            'title' => 'Usuários',
            'users' => $users,
        ],'portal.home');
        
        return 'metodo index';
    }
}