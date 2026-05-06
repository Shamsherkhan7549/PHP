<?php

function greet(){
    echo "Hello World! <br>";
}

greet();
greet();
greet();
greet();

function table($num){
    for($i=1; $i <=10; $i++){
        echo $num * $i;
        echo "<br>";
    }
}

table(5);

function sum($num1, $num2){ 
    return $num1+$num2;     
}
echo sum(5,7) . "<br>";


function sub($num1=9 , $num2=5){  // default function
    return $num1-$num2;     
}
echo sub(12,4);
        echo "<br>";


function test(){
    echo "This is a test function <br>";
}

$test2 = "test";
// $test2(); // calling the function using variable function
// echo "<br>";
// echo $test2(); //just to show that the function is called and executed successfully
// echo "<br>";
// test2(); // this will not call the function because it is not a variable function
// echo "<br>";

function main($a){
    test();
    $a();
}
main($test2);

?>