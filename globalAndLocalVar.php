<?php

$name = "anil";
function printName(){
    // $name = "peter";
    global$name;
    echo $name;
}

echo $name;
echo "<br/>";
printName();

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";

$lastName = "kumar";

function printLastName(){
    $lastName  = "stark";
    echo $lastName;

    function innerLastName(){
        // $lastName= "banner";
        global $lastName; // "kumar"
        echo $lastName;

    }
}

echo $lastName;
echo "<br/>";

printLastName();
echo "<br/>";

innerLastName();

    echo "<br/>";

$n = 5;
for($i = 1; $i<=$n; $i++){
    for($j = 1; $j<=$i; $j++){
        echo $j . " ";
    }
    echo "<br/>";
}

?>