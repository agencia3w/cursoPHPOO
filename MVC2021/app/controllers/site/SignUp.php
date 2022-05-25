<?php

namespace app\controllers\site;

use app\classes\Flash;
use app\classes\Validate;
use app\models\activerecord\Insert;
use app\models\User;

class SignUp
{
    public string $view;
    public array $data = [];
    public string $master = 'index.php';

    public function index()
    {
        $this->view = 'signup.php';
        $this->data = [
            'title' => 'Sign Up'
        ];
    }

    public function store()
    {
        $validate = new Validate;
        $validate->handle([
            'firstName' => [REQUIRED],
            'lastName' => [REQUIRED],
            'email' => [REQUIRED, EMAIL],
            'password' => [REQUIRED, MAXLEN . ':5'],
        ]);

        if ($validate->errors) {
            return redirect('/signup');
        }

        $user = new User;
        $user->firstName = $validate->data['firstName'];
        $user->lastName = $validate->data['lastName'];
        $user->email = $validate->data['email'];
        $user->password = password_hash($validate->data['password'], PASSWORD_DEFAULT);
        $created = $user->execute(new Insert);

        if ($created) {
            Flash::set('created', 'Cadastrado com sucesso', 'info');
            return redirect('/signup');
        }
    }
}
