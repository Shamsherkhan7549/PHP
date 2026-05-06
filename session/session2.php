<form action="" method="post">

<h3>Session test</h3>
<input type="text" name="user" placeholder= "Enter user" >
<br><br>

<button type="submit" name="button" value="set"> set </button>
<br><br>

<button type="submit" name="button" value="get"> get </button>
<br><br>

<button type="submit" name="button" value="delete"> delete </button>
<br><br>

</form>

<?php
session_start();

if(isset($_POST['button'])){

    if($_POST['button'] == "set"){
        $_SESSION['user'] = $_POST['user'];
        echo "Session set";

    } else if($_POST['button'] == "get"){
        if(isset($_SESSION['user'])){
            echo "User session is: " . $_SESSION['user'];
        } else {
            echo "No session found";
        }

    } else if($_POST['button'] == "delete"){
        unset($_SESSION['user']); // remove specific session
        session_destroy();        // destroy full session
        echo "Session deleted";
    }
}
?>