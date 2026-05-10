<?php
    include("./config.php");

    $getStudents = $conn->prepare("SELECT * FROM students");
    $students = $getStudents->execute();
    $students = $getStudents->fetchAll();


    echo 
    "<form method='get'>
        <h2>Search</h2>
        <input name='student' placeholder='search student name' />
        <button type='submit'>Search </button>
    </form>";

    if($_GET){
        $student =  $_GET['student'];
        $searchStudents = $conn->prepare("SELECT * FROM students WHERE name LIKE '%$student%'");
        $srchStudents = $searchStudents->execute();
        $srchStudents = $searchStudents->fetchAll();

       $students = $srchStudents;
    }
    

    echo "<table border='1'>
    <tr>
        <th>name</th>
        <th>email</th>
        <th>course</th>
        <th>duration</th>
    </tr>";

    foreach($students as $student){
        echo "<tr>
        <td>".  $student['name']. "</td>
        <td>".  $student['email']. "</td>
        <td>".  $student['course']. "</td>
        <td>".  $student['duration']. "</td>
        </tr>";
    }
    
    "</table>";
    
?>