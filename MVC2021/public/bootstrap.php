<?php
session_start();

require '../vendor/autoload.php';

use app\core\AppExtract;
use app\core\MyApp;

$myApp = new MyApp(new AppExtract);
$myApp->controller();
$myApp->view();