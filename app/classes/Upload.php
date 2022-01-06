<?php

namespace app\classes;

class Upload
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    private function extension()
    {
        return pathinfo($this->file, PATHINFO_EXTENSION);
    }

    protected function rename()
    {
        $uniqueId = uniqid(true);
        return $uniqueId . '.' . $this->extension();
    }
}
