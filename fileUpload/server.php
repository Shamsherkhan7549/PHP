<?php

/*
    File upload in PHP is a common task that allows users to upload files from their local machine
    to a server. The process typically involves an HTML form with an input of type "file" and a PHP
    script to handle the file upload.

*/
    echo "<h2>PHP page to file upload </h2>";

    print_r($_FILES["upload_file"]);

    echo "</br>";

    if($_FILES["upload_file"]){
        $path = $_FILES["upload_file"]["name"];
        $upload_path = "./uploads/".$path;
        move_uploaded_file($_FILES["upload_file"]["tmp_name"],$upload_path);

        die("file uploaded.");
    }else{
        die("file not uploaded.");
    }

?>