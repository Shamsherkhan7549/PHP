<!--
 Variables in PHP:- The variable is a container that holds the value.
 It is used to store data that can be used later in the program.
 In PHP, a variable starts with a dollar sign ($) followed by
 the name of the variable. The name of the variable can contain
 letters, numbers, and underscores, but it must start with a letter
 or an underscore. The value of a variable can be assigned using the
 assignment operator (=). For example $num = 45;
  
 
-->

<?php
    $name = "Shamsher khan";
    $_lastName = "Khan";

    echo $name;
    echo "<br>";

    echo $name;
    echo "<br>";

    echo $_lastName;
    echo "<br>";

    echo $_lastName;
    echo "<br>";
?>

<?php

    $num1 = 10;
    echo ("data type of num1 is " . gettype($num1));
    echo "<br>";
    echo "data type of num1 is " .var_dump($num1);
    echo "<br>";
    $num2 = 10.23;
    echo ("data type of num2 is " . gettype($num2));
    echo "<br>";
    echo "data type of num2 is " .var_dump($num2);
    echo "<br>";

    $str = "shamsher";
    echo("data type of num3 is" . var_dump($str));
    echo "<br>";
    
    $arr = [1,3, 56];
    echo ("data type of arr is " . var_dump($arr));
    echo "<br/>";
    echo ("data type of arr is " . gettype($arr));
    echo "<br/>";

    $arr2 = ['a', "apple", 123];
    echo ("data type of arr2 is " . var_dump($arr2));
    echo "<br>";
    echo ("data type of arr2 is " . gettype($arr2));
    echo "<br>";

   const PI = 3.14;
   /**
    *const PI = 3.15;
    *this will give an error because we cannot change the value of a constant 
  */
 echo ("value of PI is " . PI);
   echo "<br>";
   echo("data type of pi is " . var_dump(PI));

   // define = this is a function that is used to define a constant in PHP. It takes two parameters, the first parameter is the name of the constant and the second parameter is the value of the constant. The name of the constant should be in uppercase letters. For example define("PI", 3.14);
   define("GREETING", "Hello, World!");
   echo ("value of GREETING is " . GREETING);

//    const GREETING = "Hello, World2!"; // this will give an error because we cannot change the value of a constant
#     echo ("value of GREETING is " . GREETING);

    echo "<br>";

    define("greeting", "Hello, World3!"); // this will not give an error because we can define a constant with the same name but different case sensitivity
    echo ("value of greeting is " . greeting);
  
    $str = <<<EOD
    This is a nowdoc comment.
    It can span multiple lines.
    EOD;

    echo $str;
    
?> 

<!-- 
    what is comment and it types
    comments: - Comments are used to explain the code and make it more
    readable. They are ignored by the PHP interpreter and do not affect
    the execution of the program. There are three types of comments in
    PHP:

    1 . Single-line comments: - These comments start with two forward
    slashes (//) and continue until the end of the line. For
    example: // This is a single-line comment.

    2. Multi-line comments: - These comments start with a forward
    slash and an asterisk (/*) and end with an asterisk and a forward
    slash (*/). They can span multiple lines. For example:
    /* This is a multi-line comment.
    It can span multiple lines. */

    3. Shell-style comments: - These comments start with a hash symbol
    (#) and continue until the end of the line. For 
    example: # This is a shell-style comment.

    4 . Documentation comments: - These comments start with a forward
    slash and two asterisks (/**) and end with an asterisk and a 
    forward slash (*/). They are used to document the code and can
    be parsed by documentation generators. For example:
    /** This is a documentation comment.
     * It can be parsed by documentation generators.

    5. Nowdoc comments: - These comments start with <<< followed by an identifier and end with the same identifier. They are used to define
    a string that can contain variables and special characters without parsing them. For example:
    $str = <<<EOD
    This is a nowdoc comment.
    It can span multiple lines.
    EOD;
-->

