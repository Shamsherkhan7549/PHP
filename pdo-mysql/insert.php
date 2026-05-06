<?php
include("./config.php");
$insertStd= $conn->prepare("INSERT INTO `students` ( `name`, `email`, `course`, `duration`) VALUES ( 'sara', 'sara@gmail.com', 'react.js', '5months')");
$res = $insertStd->execute();
echo "<br>";
if($res){
    echo "res is " . $res;
    echo "<br>";
    print_r($res);
    echo "<br>";

    echo "data inserted successfully";
}else{
    echo "data insertion failed";
}

?>