<?php
    $user = ["name"=>"shamsher", "age"=>23, "city"=> "delhi"];

    echo $user["name"];
    echo"<br/>";

     echo $user["age"];
    echo"<br/>";

     echo $user["city"];
    echo"<br/>";

     echo $user["name"];
    echo"<br/>";

    foreach($user as $x):
        echo "<h3 style = 'color:grey;'>$x<h3/>";
    endforeach;

     foreach($user as $key => $x):
        echo "<h3 style = 'color:hotpink;'> $key: $x<h3/>";
    endforeach;

    forEach($user as $key=>$x){
        echo "<h2 style='color:navy;'> $key is $x <h2/>";
    }

?>