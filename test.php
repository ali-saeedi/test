<?php

abstract class Car{

var $name;
    public function __construct($name = '')
    {
        $this->name = $name;
    }

    abstract public function intro() : string;

}


class brandCar extends Car{

    public function intro(): string{
        return $this->name;
    }
}

$car = new brandCar("mvm");
//var_dump( $car->intro() );
echo $car->intro();


