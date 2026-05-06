<?php
    $nums = [1,2,3,4,5];

    foreach($nums as $i){ 
        echo $i;
        echo "<br/>";
    }

    $students = ["sham", "casey", "raaj", "bob", "tina", "sams"];
    forEach($students as $student){
        if($student === "casey"){
            continue; // this will skip the current iteration and move
            //  to the next iteration
        }

        if($student === "tina"){
            break; // this will exit the loop completely
        }
        echo $student;
        echo"<br/>";
    }

    forEach($students as $student):
        echo "<h1>$student<h1/>";
    endforEach;


    // forEach loop:- The forEach loop is a control structure in PHP
    //  that allows you to iterate over ARRAY AND OBJECTS. It is a
    //  more convenient way to loop through arrays compared to the
    //  traditional for loop, as it automatically handles the array 
    // keys and values. The syntax for the forEach loop is as follows:
    // foreach ($array as $value) {
    //     // code to be executed for each element
    // }
    
?>