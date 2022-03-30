<html>
<body>
<h1> Foreach Loop </h1>
<?php
$even=array(2,4,6,8,10);
$odd=array(1,3,5,7,9);
foreach($even as $num)
{
echo($num." is even number <br>");
}
echo("<br>");
foreach($odd as $num)
{
echo($num." is odd number <br>");
}
echo("<br>");

$cars=array("car1"=>"Honda", "car2"=>"BMW", "car3"=>"Ford", "car4"=>"Mercedes");
foreach($cars as $carnum=>$carname)
{
echo($carnum." = ".$carname."<br>");
}
?>
</body>
</html>