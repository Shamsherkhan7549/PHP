<!-- 
 HTML WITH PHP 
-->

<?php
 $name = "Shamsher Khan";
 $color="blue";
?>



<h1>My name is <?php echo($name) ?> </h1>
<h1 style="color: green;">My name is <?php echo($name) ?> </h1>
<h1 style="color: <?php echo($color) ?>;">My name is <?php echo($name) ?> </h1>
<h2 style="color:<?php echo $color ?>;"> I am quick learner </h2>

<?php

 echo "<h1 style='color:orange;'> I am good today.</h1>";
 echo ("<h1 style= 'color: $color;'> I am $name.</h1>");

?>