<?php
    include("./config.php");
    $id = $_GET['id'];
    $getStudent = $conn->prepare("SELECT * FROM students WHERE id='$id'");
    $student = $getStudent->execute();
    $student = $getStudent->fetchAll()[0];

    if(isset($_POST['button'])){
        $id = $_POST['button'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $duration = $_POST['duration'];

        $updateStudent = $conn->prepare("UPDATE students SET
            name='$name',
            email='$email',
            course='$course',
            duration='$duration'
            WHERE id='$id'");

        $updatedStudent= $updateStudent->execute();

        if($updatedStudent){
            header('location: ./update.php'); // use for redirection to the update page after updating the student record
        }
    }
?>

<form action="" method="post">
    <h1>Update students</h1>
    <input type="text" name = "name" value="<?php echo $student['name'];?>" placeholder="Enter name"> <br> <br>
    <input type="email" name = "email" value="<?php echo $student['email'];?>" placeholder="Enter email" > <br> <br>
    <input type="text" name = "course" value="<?php echo $student['course'];?>" placeholder="Enter course"> <br> <br>
    <input type="text" name = "duration" value="<?php echo $student['duration'];?>" placeholder="Enter duration"> <br> <br>
    <button type="submit" name='button' value="<?php echo $student['id'] ?>" > update</button>
</form>