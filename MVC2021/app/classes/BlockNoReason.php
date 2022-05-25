<?php

namespace app\classes;

use app\interfaces\ControllerMethodsInterface;

class BlockNoReason
{
    public static function block(ControllerMethodsInterface $controllerInterface, array $blockMethods)
    {
        $canBlockMethod = Block::getMethodToBlock($controllerInterface, $blockMethods);

        if($canBlockMethod){
            BlockPostRequest::block();
            return redirect('/');
        }
    }
}
