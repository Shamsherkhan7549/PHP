<?php

trait  A{
    function print(){
        echo "A";
    }
}

trait  B{
    function print(){
        echo "B";
    }
}

class Ab{
    use A;
    use B{
        A::print insteadof B; // use A's print method instead of B's print method
        B::print as printB; // give B's print method an alias name printB   
    }

}
// cannot intantiate traits;

$ab = new Ab();
$ab->print();
echo "<br/>";
$ab->printB();
echo "<br/>";


?>