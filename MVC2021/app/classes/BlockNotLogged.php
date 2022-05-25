<?php

namespace app\classes;

use app\interfaces\ControllerMethodsInterface;

class BlockNotLogged
{
    public static function block(ControllerMethodsInterface $controllerMethodsInterface, array $blockMethods)
    {
        $blockMethod = Block::getMethodToBlock($controllerMethodsInterface, $blockMethods);

        if(!isset($_SESSION['user']) and $blockMethod){
            BlockPostRequest::block();
            return redirect('/');
        }
    }
}
