<?php
// include:- if the file is not found then it will give warning
//  but the rest of the code will execute
// require:- if the file is not found then it will give fatal error and
// next lines of code will not execute
// include_once:- it will include the file only once
// require_once:- it will require the file only once

// include './index.html';
// echo "<h1>This is a php page</h1>";

// require('./index.html2');
// echo "<h1>This is a php page</h1>";

// include_once ('./index.html');
// include_once ('./index.html');
// include_once ('./index.html');
// include_once ('./index.html');
// echo "<h1>This is a php page</h1>";

// for($i=0; $i<5; $i++){
//     include_once ('./index.html');
//     echo "<h1>This is a php page</h1>";
// }

require_once './index.html';
require_once './index.html';
require_once './index.html';
echo "<h1>This is a php page</h1>";

for($i=0; $i<5; $i++){
   require_once './index.html';
    echo "<h1>This is a php page</h1>";
}


?>