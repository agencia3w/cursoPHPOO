<?php

require '../vendor/autoload.php';

use app\database\activerecord\Delete;
use app\database\activerecord\FindAll;
use app\database\activerecord\FindBy;
use app\database\models\User;

$user = new User;
$user->id = 2;

var_dump($user->execute(new FindAll(['id' => 1])));

// var_dump($user);