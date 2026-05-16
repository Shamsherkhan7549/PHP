<?php
/*
Interface in php:-  Interface is a blueprint of class. It has only method declaration,
 no method body. It is used to achieve total abstraction and multiple inheritance in php.
 It is defined by interface keyword. The class which implements interface must implement 
 all the methods of interface. It is also used to achieve loose coupling in php.
*/

interface Mammals{
 public function name();
 public function age();

}

interface Animals{
    public function legs();
    public function sound();
}

class Dog implements Mammals, Animals{ // its mandatory to implement all the methods of the interfaces
    function  name(){
        echo "Mammal name is doggy";
    }

    function age(){
     echo "doggy age is 12 yrs";
    }

    public function legs(){
        echo "doggy has 4 legs";
    }
    public function sound(){
        echo "doggy sound is bow bow";
    }

}



$dog = new Dog();
$dog->name();

echo "<br/>";
$dog->age();

echo "<br/>";

$dog->legs();

echo "<br/>";
$dog->sound();

echo "<br/>";




?>