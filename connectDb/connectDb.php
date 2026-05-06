<?php

/*
    connectdb:- Function to establish a connection to the MySQL database using
    the MySQLi extension. It takes the database credentials as parameters and
    returns a connection object that can be used to interact with the database.
    parameters:- host, username, password, database, port
*/

$host="localhost";
$username="root";
$password="";
$database="demodb";
$port = 3310; 


$connection = new mysqli($host, $username, $password, $database, $port);
echo "<pre>";
print_r($connection);
echo "<pre>";

   if($connection->connect_error){
    die("Connection failed: " . $connection->connect_error);    
   }else{
    echo "Connection successful";
   }

   echo "<br/>";

   $result= $connection->query("SELECT * FROM students")->fetch_all();
    print_r($result);
?>