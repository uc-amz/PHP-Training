<?php

interface Test{
    public function display();
    public function set_value();
}

class Imp implements Test{
    public function display()
    {
        // Code goes here...
    }

    public function set_value(){
        // Code goes here...
    }

    public function __get($name)
    {
        var_dump($name);
    }
    public function __set($name, $value)
    {
        var_dump($name, $value);
    }
    public function __isset($name)
    {
        var_dump($name);
    }
    public function __unset($name)
    {
        var_dump($name);
    }
    public function __toString()
    {
        return "String Value";
    }
    public function __invoke()
    {
        echo "Invoked";
    }
}

$obj = new Imp;

$obj(); // It will print Invoked.