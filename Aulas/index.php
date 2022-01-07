<?php

require "vendor/autoload.php";

use app\classes\UploadFoto;

echo UploadFoto::CONSTATE_ESTATICA;
echo UploadFoto::$propriedade_estatica;

abstract class Email
{
    public function teste()
    {
        return 'teste';
    }

    public static function who()
    {
        return 'Paulo';
    }

    public static function send()
    {
        return self::who(); //self retorna da classe que o método faz parte
        // return static::who(); //statict retorna da classe onde foi executada
    }
}

class SendEmail extends Email
{
    public static function who(){
        return 'Neto';
    }
}

echo SendEmail::send();