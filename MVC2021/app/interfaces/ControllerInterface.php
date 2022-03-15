<?php

namespace app\interfaces;

interface ControllerInterface
{
    public function controller();
    public function method($controller);
    public function params();
}