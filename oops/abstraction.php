<?php
    /*
      7. Abstraction :- Hide complex details, show only necessary
         parts.
    */


    abstract class Shape{
        abstract function area();
    }

    class Circle extends Shape{
        function area(){
            echo "<h2>This is Circle Area.</h2>";
        }
    }

    $circle = new Circle();
    $circle->area();

?>