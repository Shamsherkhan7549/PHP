
<form action="" method="post">
    <h1>Insert students</h1>
    <input type="text" name = "name" placeholder="Enter name"> <br> <br>
    <input type="email" name = "email" placeholder="Enter email"> <br> <br>
    <input type="text" name = "course" placeholder="Enter course"> <br> <br>
    <input type="text" name = "duration" placeholder="Enter duration"> <br> <br>
    <input type="submit" value="Insert Data">
</form>

<?php
include("./config.php");
if(isset($_POST)){

    if($_POST){
        print_r($_POST);
        echo "<br>";

        $name = $_POST['name'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $duration = $_POST['duration'];

        $insertStd = $conn->prepare("INSERT INTO `students` (`name`,`email`,`course`,`duration`) VALUES
            ('$name', '$email', '$course', '$duration')
        ");

        $result = $insertStd->execute();

        if($result){
            echo "student inserted successfully.";
        echo "<br>";
        }
        else{
            echo "student not inserted .";
        echo "<br>";
        }    
    }else{
        echo "no data to insert";
        echo "<br>";
    }

}else{
    echo "form not submitted";
    echo "<br>";
}

?>