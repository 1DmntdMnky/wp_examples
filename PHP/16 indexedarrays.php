<html>
<body>
<h1> Indexed Arrays </h1>
<?php
$weekdays = array("Monday" , "Tuesday" , "Wednesday" , "Thursday" , "Friday");
echo("My favorite weekday is : ".$weekdays[4]."<br>");
echo("Total number of elements in the array are : ".count($weekdays)."<br>");

$weekend[0]="Saturday";
$weekend[1]="Sunday";
echo($weekend[0] . " and ". $weekend[1] . " are holidays " ."<br><br>");


echo("The days of the week are : <br>");
for($i=0; $i<count($weekdays); $i++)
{
echo($weekdays[$i]."<br>");
}


?>
</body>
</html>