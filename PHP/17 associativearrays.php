<html>
<body>
<h1> Associative Arrays </h1>
<?php
$weekdays = array("Day1"=>"Monday" , "Day2"=>"Tuesday" , "Day3"=>"Wednesday" , "Day4"=>"Thursday" , "Day5"=>"Friday");
echo("My favorite weekday is : ".$weekdays["Day5"]."<br>");
echo("Total number of elements in the array are : ".count($weekdays)."<br><br>");

$weekend["Day6"]="Saturday";
$weekend["Day7"]="Sunday";
echo($weekend["Day6"]." and ".$weekend["Day7"] . " are holidays <br>");

?>
</body>
</html>