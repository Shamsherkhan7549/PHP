<?php
  $users = [
    ["name"=> "sham", "age"=>25, "city"=>"delhi"],
    ["name"=> "casey", "age"=>24, "city"=>"ny"],
    ["name"=> "bob", "age"=>25, "city"=>"la"],
    ["name"=> "alina", "age"=>28, "city"=>"jersey"],
    
  ];

  foreach($users as $key=> $user){
    echo $key . "<br/>";
    foreach($user as $key=>$x){
        echo $key . " is " . $x;
        echo"<br/>";

    }
        echo"<br/>";
  }


  echo"<pre>";
  print_r($users);
  echo"<pre>";

?>