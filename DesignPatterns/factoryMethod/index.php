<?php

abstract class Creator
{
    abstract public function make();
}

class Factory1 extends Creator
{
    public function make()
    {
        return new Concrete1;
    }
}

class Factory2 extends Creator
{
    public function make()
    {
        return 'factory 2';
    }
}

interface ConcreteInterface
{
    public function do();
}

class Concrete1 implements ConcreteInterface
{
    public function do()
    {
        return 'concrete 1';
    }
}

class Concrete2 implements ConcreteInterface
{
    public function do()
    {
        return 'concrete 2';
    }
}