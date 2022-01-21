<?php

declare(strict_types=1);

class ActiveRecord
{
    public array $data = [];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

    public function __get($name){
        if(array_key_exists($name, $this->data)){
            return $this->data[$name];
        }
    }

    public function __call($name, $arguments){
        var_dump($name, $arguments);
    }
}

$activeRecord = new ActiveRecord;
// $activeRecord->firstName = 'Paulinho';
// echo $activeRecord->firstName;
$activeRecord->create('users', 40);