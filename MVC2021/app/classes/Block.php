<?php

namespace app\classes;

use app\core\MethodExtract;
use app\interfaces\ControllerMethodsInterface;

class Block
{
    public static function getMethodToBlock(ControllerMethodsInterface $controllerMethodsInterface, array $blockMethods)
    {
        $methods = get_class_methods($controllerMethodsInterface);
        [$actualMethod] = MethodExtract::extract($controllerMethodsInterface);

        $blockMethod = false;

        foreach ($methods as $method) {
            if (in_array($method, $blockMethods) and $method === $actualMethod) {
                $blockMethod = true;
            }
        }

        return $blockMethod;
    }
}
