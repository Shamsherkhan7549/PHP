<?php

    /* 
        class:-  
            - class is a blueprint of object.
            - class is a template for creating objects.
    */

    class Student{
        public $name;
    }

    /*
        object:-    
            - object is an instance of class.
            - object is a real world entity.
    */
    
    $student1 = new Student(); // $student1 is object
    $student1->name = "rehan";
    // echo $student1->name;

    /*
        constructor:-
            - constructor is a special method that is automatically
            called when an object of a class is created.
            
            - constructor is used to initialize the properties of 
            an object.
    */

    class Car {
        public $name;

        function __construct($name){  // constructor 
            $this->name = $name;
        }
    }

    $car1 = new Car("alto-800");
    echo $car1->name;

    echo "<br/>";

    print_r($car1);
?>