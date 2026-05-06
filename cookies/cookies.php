<?php

/*
        cookies :- A cookie is a small piece of data that a server sends to the user's web browser.
     The browser may store the cookie and send it back to the same server with later requests. Cookies
     are used to remember information about the user, such as login status, preferences, and other data
     that can enhance the user experience on a website.
*/

setcookie("fruit", "apple", time()+(24*60*60));
setcookie("color", "red", time()+(24*60*60));

// print_r($_COOKIE['fruit']);

if($_COOKIE['fruit']){
    echo "cookie is ". $_COOKIE['fruit'];
}else{
    echo "cookies fruit is  not present";
}

echo "<br/>";

if($_COOKIE['color']){
    echo "cookie is ". $_COOKIE['color'];
}else{
    echo "cookies color is not present";
}

?>