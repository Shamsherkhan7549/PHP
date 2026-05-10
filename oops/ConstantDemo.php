<?php
class ConstantDemo{
   protected const  collegeName="RKDF College of Engineering";

        function getCollegeName(){
            // echo ConstantDemo::collegeName; // right way

            echo self::collegeName; // right way

            // echo this->collegeName; // gives error
        }

}

class Child extends ConstantDemo{
    function printCollegeName(){
        echo self::collegeName;
    }
}

// echo ConstantDemo :: collegeName;
$college = new ConstantDemo();

echo "<br/>";

 $college->getCollegeName(); 
echo "<br/>";

 $child = new Child();
 $child->printCollegeName();
?>