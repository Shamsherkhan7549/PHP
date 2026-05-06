<?php
/*
    Inheritance:-
        - Inheritance is a fundamental object-oriented programming(OOP)
         concept that allows a new class (called a child or subclass)
         to inherit properties and behaviors (attributes and methods)
         from an existing class (called a parent or superclass).

        - The child class can also have its own unique properties and
         behaviors, in addition to those inherited from the parent
         class.
         
        - Inheritance promotes code reusability and establishes a 
            natural hierarchical relationship between classes.    
*/

class Animal{
    public $name;
    
    function __construct($name){
        $this->name = $name;
    }

    function legs($legs){
        echo "<h2>{$this->name} has $legs legs.</h2>";
    }

     function tail(){
        echo "<h2>{$this->name} has 1 tail.</h2>";
    }

}

class Dog extends Animal{
    function barks(){
        echo "<h2>{$this->name} barks</h2>";
    }
}

$dog = new Dog("bob");
echo $dog->name; 
echo"</br>";
$dog->legs(3);
$dog->tail();
$dog->barks();
echo"</br>";
echo"</br>";


$cat = new Animal("tom");
$cat->legs(4);
$cat->tail();
    
?>