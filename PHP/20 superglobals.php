<html>
<body>
<h1> PHP Superglobals</h1>
<?php
$x=5;
$y=2;
function multiply()
{
$GLOBALS['prod']=$GLOBALS['x']*$GLOBALS['y'];
}
multiply();
echo("The Product of ". $x . " and ". $y." is : ".$prod);
?>
</body>
</html>

