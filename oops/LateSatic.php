<?php

class Car{
    static $name = "honda";

    static function getName(){
        echo static::$name;
    }

    static function printName(){
     static::getName();
    }
}

class Nano extends Car{
    static $name = "tata";

    static function getName(){
        echo static::$name;
    }
}

$car = new Car();
// echo Car::$name;
// echo "<br/>";

// $car->printName();
// echo "<br/>";

$car::printName();
echo "<br/>";

$nano = new Nano();
// echo nano::$name;
// echo "<br/>";
// echo $nano::$name;
// echo "<br/>";

// $nano->printName();
// echo "<br/>";

$nano::printName();
echo "<br/>";


?>