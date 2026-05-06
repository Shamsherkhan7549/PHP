<?php
  $users = [
    ["name"=> "sham", "age"=>25, "city"=>"delhi"],
    ["name"=> "casey", "age"=>24, "city"=>"ny"],
    ["name"=> "bob", "age"=>25, "city"=>"la"],
    ["name"=> "alina", "age"=>28, "city"=>"jersey"],
    
  ];

    echo  "<table border = 1>";
        echo "<th>sn.</th>";
        echo "<th>name</th>";
        echo "<th>age</th>";
        echo "<th>city</th>";

        foreach($users as $key=> $user){

     
                echo  "<tr>";
                echo  "<td>";
                echo $key + 1;
                echo  "</td>";

                    foreach($user as $key=>$x){
                        echo  "<td>";
                            echo $x;
                        echo  "</td>";


                    }
                echo  "</tr>";

        }
    echo  "</table>";

?>