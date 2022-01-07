<?php

namespace app\classes;

class UploadFoto extends Upload
{
    const CONSTATE_ESTATICA = 'Constante estática';
    public static $propriedade_estatica = 'propriedade estática';

    protected $extensions = ['png', 'jpg'];

    public function upload()
    {
        return "Gerou a foto {$this->rename()}";
    }

    public static function teste(){
        return 'teste';
    }
}
