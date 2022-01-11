<?php

use app\classes\Crud;
use app\classes\Login;

require '../vendor/autoload.php';

$login = new Login;
$login->email = 'teste@example.com';
$login->password = 'pwd';
echo $login->auth(new Crud);