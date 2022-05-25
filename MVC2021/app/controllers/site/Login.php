<?php

namespace app\controllers\site;

use app\classes\BlockNotLogged;
use app\classes\Flash;
use app\core\MethodExtract;
use app\interfaces\ControllerMethodsInterface;
use app\models\activerecord\FindBy;
use app\models\User;

class Login implements ControllerMethodsInterface
{
    public string $view;
    public array $data = [];
    public string $master = 'index.php';

    public function __construct()
    {
        BlockNotLogged::block($this, ['store']);
    }

    public function index(array $args)
    {
        $this->view = 'login.php';
        $this->data = [
            'title' => 'login'
        ];
    }

    public function store()
    {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);



        $user = (new User)->execute(new FindBy('email', $email));

        if (!$user) {
            Flash::set('login', 'Usuário não encontrado');
            return redirect('/login');
        }

        $passwordMatch = password_verify($password, $user->password);

        if (!$passwordMatch) {
            Flash::set('login', 'Senha incorreta');
            return redirect('/login');
        }

        unset($user->password);
        $_SESSION['user'] = $user;

        return redirect('/');
    }

    public function destroy(array $args){
        session_destroy();

        redirect('/');
    }

    public function show(array $args)
    {

    }
    
    public function edit(array $args)
    {

    }
    
    public function update(array $args)
    {

    }
    
}
