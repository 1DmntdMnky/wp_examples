<html>
<body>
<h1> Operators in PHP </h1>
<h3>Arithmetic Operators (+, -, *, /, %, **)</h3>   
<?php
$x=5; $y=3;
echo ("The sum is : ".($x+$y)."<br>");
echo ("The difference is : ".($x-$y)."<br>");
echo ("The product is : ".($x*$y)."<br>");
echo ("The quotient is : ".($x/$y)."<br>");
echo ("The remainder is : ".($x%$y)."<br>");
echo ($x." raised to ".$y." is : ".($x**$y)."<br>"); 

echo("<h3>Assignment Operators (=, +=, -=, *=, /=, %=)</h3>");
echo(($x+=$y)."<br>");
echo(($x-=$y)."<br>");
echo(($x*=$y)."<br>");
echo(($x/=$y)."<br>");
echo(($x%=$y)."<br>");

echo("<h3>Comparison Operators (==, ===, !=, <>, !==, >, <, >=, <=)</h3>");
// Comparison operators returns true or false values
echo ("Value of x is : ".$x. " and Value of y is : ".$y."<br>");
var_dump($x == $y); echo("<br>");
var_dump($x != $y); echo("<br>");
var_dump($x <> $y); echo("<br>");
var_dump($x > $y); echo("<br>");
var_dump($x < $y); echo("<br>");
var_dump($x >= $y); echo("<br>");
var_dump($x <= $y); echo("<br>");

$y="2";
var_dump($x === $y); echo("<br>");
var_dump($x !== $y); echo("<br>");
$y=2;
var_dump($x === $y); echo("<br>");

echo("<h3>Increement/Decreement Operators (++ , --)</h3>");
echo("<h3>Logical Operators (&& , ||, !)</h3>");
echo("<h3>Conditional Operators (?: , ?? null coalescing)</h3>");
$y=3;
$res=$x>$y?$x:$y;
echo("The greatest value is : ".$res."<br>");
//$z=NULL;
$res=$z??$y;
echo($res);
?>

</body>
</html>