<html>
<body>
<h1> Functions </h1>
<?php
function msg()           // Simple function
{
echo("Hello World");
}

function name($fname, $lname) //Parameterized function
{
echo($fname." ".$lname."<br>");
}

function add($n1, $n2, $n3) // Parameterized function with return
{
return ($n1+$n2+$n3);
}

function prod($n1=2, $n2=3) // Parameterized function with Default Arguments
{
$res=$n1*$n2;
return $res;
}

function passbyref(&$no) //Passing arguments by reference
{
$no*=10;
return $no;
}

echo("<h3> Simple function</h3>");
msg();
echo("<h3> Parameterized function</h3>");
name("John", "Doe");
name("Ashley", "Liam");
echo("<h3> Parameterized function with return</h3>");
$sum=add(1,2,3);
echo($sum);
echo("<h3> Parameterized function with Default Arguments</h3>");
echo("The product is ".prod()."<br>");
echo("The product is ".prod(5,10)."<br>");
echo("<h3> Arguments pass by reference</h3>");
$num=3;
$num=passbyref($num);
echo($num);
?>
</body>
</html>