<?php

header('Content-type: application/json');

use app\classes\Abajur;
use app\classes\Book;
use app\classes\Product;

require '../vendor/autoload.php';

// $book = new Book;
// $book->name = 'Meu Livro';
// $book->description = 'Culpa duis duis in do cupidatat aliquip voluptate tempor.';
// $book->pages = 300;
// $book->author = 'Paulo Neto';

// echo json_encode($book);

$abajur = new Abajur;
$abajur->name = 'Abajur';
$abajur->description = 'Et nisi nisi mollit enim ea adipisicing fugiat mollit ipsum quis ad voluptate commodo.';
$abajur->isOn = true;

echo json_encode($abajur);