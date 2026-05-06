<?php
include("./config.php");
$getStudent = $conn->prepare("SELECT * FROM students");
$students = $getStudent->execute();
$students = $getStudent->fetchAll();

echo "<pre>";
 print_r($students);

 echo "<table border='1'>";
 echo "<tr>";
    echo "<th>";
     echo "Id";
    echo "</th>";

    echo "<th>";
     echo "Name";
    echo "</th>";

    echo "<th>";
     echo "Email";
    echo "</th>";

    echo "<th>";
     echo "Course";
    echo "</th>";
    
    echo "<th>";
     echo "duration";
    echo "</th>";

    echo "</tr>";

    foreach($students as $student){
      echo "<tr>";
         echo "<td>";
         echo $student['id'];
        echo "</td>";
        echo "<td>";
         echo $student['name'];
        echo "</td>";

        echo "<td>";
         echo $student['email'];
        echo "</td>";

        echo "<td>";
         echo $student['course'];
        echo "</td>";

        echo "<td>";
         echo $student['duration'];
        echo "</td>";
      echo "</tr>";
    }
 echo "</table>"

?>