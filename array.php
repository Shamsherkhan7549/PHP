<?php
// Array in PHP:- Array is a data structure that can hold multiple
//  values at once. It is a collection of elements, where each element
//  is identified by an index or a key. In PHP, there are three types
//  of arrays: indexed arrays, associative arrays, and multidimensional
//  arrays.


// Indexed Arrays:- Indexed arrays are the most basic type of array
//  in PHP.
//  They are created using the array() function or the shorthand []
//  syntax.

$user = array("anil", "peter","sam", "casey");
// echo $user; // this will not work because we cannot echo an array directly
echo $user[2]; 
    echo"<br/>";

for($i=0; $i<count($user); $i++){
    echo $user[$i];
    echo"<br/>";
}

$fruits = ["apple", "banana", "pomegranate", "mango"];
for($i=0; $i<count($fruits); $i++){
    echo "<h1 style='color:red'> $i. $fruits[$i] </h1>";
}

$str = "shamsher";
// echo count($str); // this will return 1 because it is a string and
//  not an array
echo strlen($str); // this will return the length of the string which 
// is 8  


?>