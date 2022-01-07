<?php

namespace app\traits;

trait ValidationFile
{
    public function validation(){
        if(!in_array($this->extension(), $this->extensions)){
            throw new \Exception("Essa extensão não é aceita");
        }
    }
}
