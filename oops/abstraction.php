<?php
    /*
      7. Abstraction :- Hide complex details, show only necessary
         parts.
    */


    abstract class Shape{
        public $color = "red";
        abstract function area();
        
    }

    abstract class Color{
        abstract function color();
    }

    class Square extends Shape, Color{ // multiple inheritance is not possible in php, so we can not extend two classes
        function area(){
            echo "<h2>This is Square Area. Color: " . $this->color . "</h2>";
        }

        function color(){
            echo "<h2>Color: " . $this->color . "</h2>";
        }
    }
    
    $circle = new Circle();
    $circle->area();

    $square = new Square();
    $square->area();
    $square->color();

?>