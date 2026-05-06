<?php
include("./config.php");

$getStudents = $conn->prepare("SELECT * FROM students");
$students = $getStudents->execute();
$students = $getStudents->fetchAll();

print_r($students);
echo "</br>";
$deleteStudent = $conn->prepare("DELETE FROM students WHERE id='10'");
// $deletedStudent = $deleteStudent->execute();
// print_r($deletedStudent);

echo "<table border='1'>
<tr>
 <th>Name</th>
 <th>Email</th>
 <th>Course</th>
 <th>duration</th>
 <th>delete</th>
</tr>";

foreach($students as $student){
    echo"<tr>
        <td>". $student['name'] ."</td>
        <td>". $student['email'] ."</td>
        <td>" . $student['course'] . "</td>
        <td>" . $student['duration']. "</td>
        <td>
        <form method='post'>
            <button name='button' value=". $student['id'] . " >delete</button>
        </form>
        </td>

    </tr>";
}
"</table>";

if(isset($_POST['button'])){
    $id = $_POST['button'];

    $delStudent = $conn->prepare("DELETE FROM students WHERE id='$id'");
    $student = $delStudent->execute();
   if($student){
    echo $student . " student record deleted";
   }else{
    echo "student record not deleted";

   }
}

?>