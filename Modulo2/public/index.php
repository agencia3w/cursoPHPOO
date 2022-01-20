<?php

declare(strict_types=1);

abstract class Model
{
    public string $entity;

    public function all()
    {
        return 'all ' . $this->entity;
    }

    public function update()
    {
        return 'update ' . $this->entity;
    }

    public function delete()
    {
        return 'delete ' . $this->entity;
    }

    abstract function setEntity(string $entity);
}

class User extends Model{
    function setEntity(string $entity){
        $this->entity = $entity;
    }
}

class Post extends Model{
    function setEntity(string $entity){
        $this->entity = $entity;
    }
}

$user = new User;
$user->setEntity('users');
echo $user->all();