<?php
include("./config.php");
$getStudent= $conn->prepare("SELECT * FROM students");
$students = $getStudent->execute();
$students = $getStudent->fetchAll();

echo "<pre>";
print_r($students);

echo "<select>";
echo "<option>";
    echo "Select student";
    echo "</option>";
foreach($students as $key=> $student){
    echo "<option value='" . $student["id"] . "'>" . $student['name'] . "</option>";
}
echo "</select>";


// foreach($students as  $student){
//        print_r($student['name']);

// }



?>