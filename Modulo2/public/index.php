<?php

use app\classes\Person;

require '../vendor/autoload.php';

$person = new Person('Paulinho','paulinho@agencia3w.com.br');

echo $person->info();