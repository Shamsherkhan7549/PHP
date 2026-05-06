<?php
    $name = "Shamsher";
    echo ($name == "Shamsher");
    echo "<br>";

    echo var_dump($name == "Shamsher khan");
    echo "<br>";

    echo var_dump($name !== "Shamsher khan");
    echo "<br>";
    
    if($name == "Shamsher"){
        echo "Hello ". $name;
    }else{
        echo "Hello Guest";
    }
    echo "<br>";

    $days = 8;

    switch($days){
        case 1:
            echo "Monday";
            break;
        case 2:
            echo "Tuesday";
            break;
        case 3:
            echo "Wednesday";
            break;
        case 4:
            echo "Thursday";
            break;
        case 5:
            echo "friday";
            break;
        case 6:
            echo "Saturday";
            break;
        case 7:
            echo "Sunday";
            break;
        default:
        echo "Day not found";
        
    }
?>
