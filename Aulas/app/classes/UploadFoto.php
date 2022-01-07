<?php

namespace app\classes;

class UploadFoto extends Upload
{
    protected $extensions = ['png', 'jpg'];

    public function upload()
    {
        return "Gerou a foto {$this->rename()}";
    }
}
