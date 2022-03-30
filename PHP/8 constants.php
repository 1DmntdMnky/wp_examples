<html>
<body>
<h1> Constants in PHP </h1>

<?php
$x=5;                    //Integer datatype
echo($x . "<br>");
$x="Hello";               // Changing datatype from integer to string
echo($x . "<br>");

# Creating a constant variable x

define("x","10");
echo(x . "<br>");
define("x","15"); //changing value of x from 10 to 15
echo(x . "<br>");
?>

</body>
</html>