<?php

/*
    Encapsulation:-
        - Encapsulation is a fundamental object-oriented programming
         (OOP) concept that refers to the bundling of data (attributes)
         and methods (functions) that operate on that data into a
         single unit, called a class.

        - Encapsulation allows for data hiding, which means that the
         internal state of an object can be hidden from the outside
         world and can only be accessed through well-defined interfaces
         (methods). This helps to protect the integrity of the data and
         prevents unauthorized access or modification.

        - In PHP, encapsulation is achieved using access modifiers:
            - public: The property or method can be accessed from
             anywhere.

            - private: The property or method can only be accessed 
            within the class itself.

            - protected: The property or method can be accessed within
             the class and by inheriting classes.


*/

 class Car{
    public $name;
    public $model;
    protected $price;
    private $engine;
     
    function __construct($name){
        $this->name = $name;
        echo "Car constructor called...";
    }
    
    public function setEngine($engine){
        $this->engine = $engine;
    }

    public function getEngine(){
        echo "<h2> {$this->name} engine has {$this->engine}.</h2>";

    }

}

class Pickup extends Car{

 function __construct($name){
        $this->name = $name;
        echo "Pickup constructor called...";

    }

    public function setPrice($price){
        $this->price = $price;
    } 
     public function getPrice(){
        echo "<h2> {$this->name} price is {$this->price}.</h2>";

    }    
}


$car2 = new Car("Maruti suzuki");
$car2->setEngine("suzuki_super2312 fast engine");
$car2->getEngine();

$pickup = new Pickup("Tata pickups");
$pickup->setPrice(4500000);
$pickup->getPrice();

echo $car2->name;
echo $pickup->name;


// $car1 = new Car();
// $car1->name = "Alto";
// $car1->model = "Alto-800";
// // $car1->price = 150000; 
// // $car1->engine = "alt-800 medium engine";
// echo $car1->name;
// echo "</br>";
// echo $car1->model;





?>