<?php

$host="localhost";
$username="root";
$password=null;
$port=3310;
$database="demodb";

try{
    $conn = new PDO("mysql:host=$host;dbname=$database;port=$port", $username, $password);
    $result = $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "connection successfull";

}catch(PDOException $ex){
    echo "connectioin failed : ".  $ex->getMessage();
}

?>