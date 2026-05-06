<?php

$users = ["peter", "tony", "rodger", "bruce"];

// Add element
array_push($users, "chris");
array_push($users, "evans", "krish", "srk");

//remove element from end
// array_pop($users);


//remove multiple value 
array_splice($users, -2);

print_r($users);

?>