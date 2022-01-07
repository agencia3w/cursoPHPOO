<?php

namespace app\classes;

use app\traits\ValidationFile;

abstract class Upload
{

    use ValidationFile;

    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    protected function extension()
    {
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    protected function rename()
    {
        $uniqueId = uniqid(true);
        return $uniqueId . '.' . $this->extension();
    }
}
