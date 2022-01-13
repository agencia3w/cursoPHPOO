<?php

namespace app\classes;

use app\models\User as ModelsUser;

class User extends Person
{
    public function info()
    {
        $user = new ModelsUser;
    }
}
