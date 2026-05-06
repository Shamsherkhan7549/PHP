<?php
    /*
    Polymorphism:-
        - Polymorphism is a fundamental object-oriented programming
            (OOP) concept that allows objects of different classes to be
            treated as objects of a common superclass. It enables
            different classes to be used interchangeably through a
            common interface, allowing for flexibility and extensibility
            in code design.

        - Polymorphism can be achieved through method overriding and
         overloading,
            - Method overriding occurs when a subclass provides a specific
             implementation of a method that is already defined in its
             superclass. The method in the subclass has the same name,
             return type, and parameters as the method in the superclass,
             but it provides a different implementation.

            - overloading occurs when multiple methods in the same class
             have the same name but different parameters. In PHP, method
             overloading is not natively supported, but it can be
             simulated using magic methods like __call().

    
    */

    class Animal{
        public $name;

        function __construct($name){
            $this->name = $name;
        }
        function talks(){
            echo "<h2>{$this->name} roars.</h2>";
        }


        // php doesn't support method overloading
        // function legs($num, $num2){
        //     return $num+$num2;
        // }

        // function legs($num, $num2, $num3){
        //     return $num+$num2-$num3;
        // }
    }

    class Dog extends Animal{
        function talks(){
            echo "<h2>{$this->name} barks</h2>.";
            
        }
    }

    $lion = new Animal("Lion");
    $lion->talks();

    $dog = new Dog("Bob");
    $dog->talks();

    // dog->legs(2,3);
    // dog->legs(2,3,1);

?>