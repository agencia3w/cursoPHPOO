<?php

class CarFactory
{
    public static function make(string $class): CarFactoryInterface
    {
        $className = ucfirst($class);

        if (!class_exists($className)) {
            throw new Exception("A classe {$className} não existe");
        }

        $class = new $className;

        if (!$class instanceof CarFactoryInterface) {
            throw new Exception("A classe {$className} não é do tipo CarFactoryInterface");
        }

        return $class;

    }
}

interface CarFactoryInterface
{
    public function drive();
}

class Fusca implements CarFactoryInterface
{
    public function drive()
    {
        return 'drive fusca';
    }
}

class Chevette implements CarFactoryInterface
{
    public function drive()
    {
        return 'drive chevette';
    }
}

$carInstance = CarFactory::make('chevette');
echo $carInstance->drive();