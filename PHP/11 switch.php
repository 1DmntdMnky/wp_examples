<html>
<body>
<h1>Switch Statement </h1>
<?php
$today = date("D");
echo($today."<br>");
switch($today){
    case "Mon":
        echo("Today is Monday.");
        break;
    case "Tue":
        echo("Today is Tuesday.");
        break;
    case "Wed":
        echo("Today is Wednesday.");
        break;
    case "Thu":
        echo("Today is Thursday.");
        break;
    case "Fri":
        echo("Today is Friday.");
        break;
    case "Sat":
        echo("Today is Saturday.");
        break;
    default:
        echo("Today is Sunday.");
        break;
}
?>
</body>
</html>