<?php

namespace app\controllers;

use app\classes\Flash;
use app\models\activerecord\FindBy;
use app\models\User;

class Login
{
    public string $view;
    public array $data = [];

    public function index()
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

    public function destroy(){
        session_destroy();

        redirect('/');
    }
}
