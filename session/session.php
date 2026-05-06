<?php
/*

        session :- A session is a way to store information (in variables) to be used across multiple
         pages. Unlike cookies, session data is stored on the server, and a unique session ID is sent
          to the client's browser as a cookie. This allows for more secure and larger amounts of data 
          to be stored compared to cookies.

*/

session_start();
$_SESSION['cookie'] = "sham";
echo $_SESSION['cookie'];

session_destroy();



?>