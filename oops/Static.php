<?php

class Car{
 static public $name= "Honda";

 static function carName(){
    echo "car name is " . self:: $name;
 }
}

echo Car::$name;
 
echo "<br/>";

 Car::carName();

?>