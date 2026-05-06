<?php

 "<PRE>";
 print_r($_POST);
 "<PRE>";

 if(isset($_POST['file'])){
    $fileName = "file_creation/".$_POST['file'];
    $content = $_POST['content'];
    echo $fileName;
    $file = fopen($fileName,"w") or die("unable to create file");

 }



?>

<form action="" method="post">
    <h2>Write content</h2>
    <input type="text" name="file" placeholder="Write file name"> <br><br>
    <br>
    <textarea  name="content">write content</textarea>
    <br><br>
    <button type="submit">create file</button>
</form>