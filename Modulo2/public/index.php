<?php

declare(strict_types=1);

require '../vendor/autoload.php';

use app\classes\{Book, Crud, Login, User as ClassesUser};
use app\models\{Product, User};

$book = new Book;

$crud = new Crud;
echo $crud->delete();

$login = new Login;

$product = new Product;

$userModel = new User;
$user = new ClassesUser;