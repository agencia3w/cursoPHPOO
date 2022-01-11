<?php

use app\models\Product;
use app\models\User;

require '../vendor/autoload.php';

$user = new User;
echo $user->all();

$product = new Product;
echo $product->delete();