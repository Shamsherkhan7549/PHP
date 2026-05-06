<?php
   echo  "<h1>This is Signup php page</h1>";
   $name = $_POST['name'];
   $email = $_POST['email'];
   $username = $_POST['username'];
   $password = $_POST['password'];
   echo $name;
   echo "<br/>";
   echo $email;
   echo "<br/>";
   echo $username;
   echo "<br/>";
   echo $password;
   echo "<br/>";

   print_r($_POST);
   echo "<br/>";

   print_r($_GET)
?>