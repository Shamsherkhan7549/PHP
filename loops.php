<?php
    $name = "shamsher";

  for($i=1; $i<= 5; $i++){
    echo $name;
    echo"<br/>";
  }

  $i = 1;
  while($i<=5){
    echo "samar";
    echo "<br>";
    $i++;
  }

 
 $j = 1;
  do{
    echo $j . " Rehan";
    echo "<br>";
    $j++;
  }while($j<=5);


  for($i=1; $i<=10; $i++){
    if($i === 3){
        continue;
    }
    if($i===7){
        break;
    }
    echo $i;
    echo "<br>";
  }

?>