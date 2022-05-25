<?php
require 'app/Connection.php';

use app\Connection;

$instance1 = Connection::getInstance();
$instance2 = Connection::getInstance();

var_dump($instance1, $instance2);