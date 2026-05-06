<?php

$host="localhost";
$username="root";
$password="";
$database="demodb";
$port=3310;



try{
    $conn = new PDO("mysql:host=$host; dbname=$database; port=$port", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   

    echo "Connection successful";
}catch(PDOException $err){
        echo "connection failed $err->getMessage()";
}

echo "<br/>";

$result = $conn-> query("SHOW TABLES");

while ($row = $result->fetch(PDO::FETCH_NUM)) {
    # code...
    print_r($row);
}

echo "<br/>";
 "<PRE>";
    print_r($result);
    "<PRE>";




/*

    connectdbByPdo:- Function to establish a connection to the MySQL database using
    the PDO extension. It takes the database credentials as parameters and
    returns a connection object that can be used to interact with the database.
    parameters:- host, username, password, database, port
    syntax:- new PDO("mysql:host=$host;dbname=$database;port=$port", $username, $password);

    How pda different from mysqli? what is better and why?

    PDO (PHP Data Objects) and MySQLi (MySQL Improved) are both PHP extensions used for
    interacting with databases, but they have some key differences:
    1. Database Support:
       - PDO: Supports multiple database types (MySQL, PostgreSQL, SQLite, etc.) through a 
        consistent interface.
       - MySQLi: Specifically designed for MySQL databases.
    2. Object-Oriented vs. Procedural:
       - PDO: Primarily object-oriented, but also supports a procedural interface.
         - MySQLi: Supports both object-oriented and procedural programming styles.
    3. Prepared Statements:
       - PDO: Uses named placeholders for prepared statements, which can enhance readability.
         - MySQLi: Uses question mark placeholders for prepared statements.
    4. Error Handling:
       - PDO: Provides a more robust error handling mechanism through exceptions.
            - MySQLi: Uses traditional error handling methods, which can be less intuitive.
    5. Performance:
       - PDO: Generally has a slightly higher overhead due to its abstraction layer, but the performance
            difference is negligible for most applications.
            - MySQLi: May offer better performance for MySQL-specific operations due to its specialization.
    In summary, PDO is more versatile and provides better error handling, making it a good choice for
    applications that may need to support multiple database types. MySQLi is a solid choice
     for applications that are strictly using MySQL and may benefit from its performance optimizations.

*/

?>