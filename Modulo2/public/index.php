<?php

require '../vendor/autoload.php';

use app\classes\Crud;
use app\classes\Login;

$login = new Login;
$login->email = 'paulinho@agencia3w.com.br';
$login->password = 123;
echo $login->auth();

$user = ['name' => 'Paulinho', 'email' => 'paulinho@agencia3w.com.br'];

$userObj = (object)$user;
var_dump($userObj);

$crud = new Crud;
echo $crud->read();