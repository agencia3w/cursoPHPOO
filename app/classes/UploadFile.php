<?php

namespace app\classes;

class UploadFile extends Upload
{
    public $extensions = ['zip', 'rar', 'pdf'];

    public function __construct($file)
    {
        parent::__construct($file);
        echo "Construdor do UploadFile ";
    }

    public function upload()
    {
        return "Gerou o arquivo {$this->newName}";
    }
}
