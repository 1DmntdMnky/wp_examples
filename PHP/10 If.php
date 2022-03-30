<html>
<body>
<h1> If statement </h1>
<?php
$x=5; $y=3;
if($x>$y)
echo($x." is greatest number");
else
echo($y. "is greatest number<br>");

echo("<h3> if..elseif..else statement </h3>");
$time=19;
if($time<12)
echo("Good Morning");
elseif($time<16)
echo("Good afternoon");
elseif($time<20)
echo("Good evening");
else
echo("Good night");
?>
</body>
</html>