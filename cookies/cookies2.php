
    <form action="" method="post">

        <h3>Test cookies</h3>
        <input type="text" name="user" placeholder="Enter cookie name">
        <br/>
        <br/>

        <button type="submit" name="button" value="Set Cookies"> set </button>
        <br/>
        <br/>
        <button type="submit" name="button" value="display Cookies"> display </button>
        <br/>
        <br/>
        <button type="submit" name="button" value="delete Cookies"> delete </button>
    </form>
<?php
   if((isset($_POST["button"]))){
        if($_POST["button"]=="Set Cookies"){
            setcookie("user", $_POST["user"], time()+24*60*60);
        }else if($_POST["button"]=="display Cookies"){
            echo "cookie is ". $_POST["user"];
        }else if ($_POST["button"]=="delete Cookies"){
            setcookie("user", null, -1);

        }
   }
?>