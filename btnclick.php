<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Button Click</title>
</head>
<body>
    <form action="" method="POST">
        <button name=button value="btn1">
            click me
        </button>
    </form>
    
</body>
</html>

<?php

// print_r(isset($_POST["button"]));

if(isset($_POST["button"])){
    btn_click_test();
}

function btn_click_test(){
    echo "function call on button click.";
}

?>