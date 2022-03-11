<?php

namespace app\models;

use app\models\Connection;

abstract class Model
{

    protected $connection;

    public function __construct()
    {
        $this->connection = Connection::Connect();
    }

    public function all(){
        $sql = "SELECT * FROM {$this->table}";
        $list = $this->connection->query($sql);
        $list->execute();

        return $list->fetchAll();
    }
}