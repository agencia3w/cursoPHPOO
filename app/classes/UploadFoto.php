<?php

namespace app\classes;

class UploadFoto extends Upload
{
    public $extensions = ['png', 'jpg'];

    public function upload()
    {
        return $this->newName;
    }
}
