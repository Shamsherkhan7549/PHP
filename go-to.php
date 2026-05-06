<?php
    $num = 2;
     echo "before goto <br/>";

    if($num ===2){
        goto jump;
    }
     echo "rehan <br/>";
     echo "samar <br/>";
     echo "samir <br/>";
     echo "raaj <br/>";







     jump:
     echo "after jump we are at line no. 20 <br/>";


    for($i = 1; $i <=20;  $i++){

            if($i ===11){
                goto finish;
            }
            echo $i;
            echo "<br/>";
    }  
    echo "samar <br/>";
     echo "samir <br/>";
     echo "raaj <br/>";






   finish: echo "We are finish count at 10  at line number 40. to come out from loop";
    
    

?>