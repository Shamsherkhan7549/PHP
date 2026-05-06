<?php
 /*
    $GLOBALS :- it use to access the global variable from any where in the program.
     It is an associative array that contains all global variables in the script. 
     eg:- $SERVER, $_GET, $_POST, $_REQUEST, $_FILES, $_SESSION, $_ENV, etc.
      

    $_SERVER :- it is a super global variable which holds information about headers, paths,
     and script locations. It is an associative array that contains information such as the
     server name, request method, and user agent.

    $_GET :- it is a super global variable which is used to collect form data after submitting
        an HTML form with method="get". It is an associative array that contains the data sent
        through the URL.

    $_POST :- it is a super global variable which is used to collect form data after submitting
     an HTML form with method="post". It is an associative array that contains the data sent
     through the POST method.

    $_REQUEST :- it is a super global variable which is used to collect form data after submitting
     an HTML form with method="get"r method="post". It is an associative array that contains
     the data sent through both GET and POST methods.

     Note :- $_REQUEST is not recommended for use in production code as it can lead to security
     vulnerabilities if not used properly. It is better to use $_GET or $_POST depending on the
     method used in the form submission.
 */

    $num = 3;
    $num2 = 5;

    echo "<pre>";
    print_r($GLOBALS);
    echo"<br/>";

    print_r($_SERVER);
    echo"<br/>";

    print_r($_REQUEST); // not recommended

    print_r($_POST);

    print_r($_GET);

    echo "<pre>";


?>