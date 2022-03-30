<html>
<body>
<h1> Datatypes in PHP </h1>

<?php
$x=5;                    //Integer datatype
echo($x . "<br>");
var_dump($x);           //var_dump returns datatype and the data assigned
echo "<br><br>";

$y=2.5;                 //Float datatype
echo $y. "<br>";
var_dump($y);          //for string datatype var_dump returns datatype, length of the string and the data assigned
echo "<br><br>";

$s="Hello World !!!";  //String Datatype
echo $s. "<br>";
var_dump($s);         //for string datatype var_dump returns datatype, length of the string and the data assigned
echo "<br><br>";


$t=true;              //Boolean datatype
$f=false;
echo "$t <br>";
echo "$f <br>";
var_dump($t);
echo("<br>");
var_dump($f);
?>

</body>
</html>