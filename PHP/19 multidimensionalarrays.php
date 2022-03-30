<html>
<body>
<h1> Multidimensional Arrays </h1>
<?php
$matrix = array (
     array(10,20,30),   
     array(40,50,60),   
     array(70,80,90)
);
 echo ( "&nbsp;&nbsp;&nbsp;   c1 c2 c3 <br>");    
echo("r1 ".$matrix[0][0] . "  " . $matrix[0][1] . " " . $matrix[0][2]. "<br>");
echo("r2 ".$matrix[1][0] . "  " . $matrix[1][1] . " " . $matrix[1][2]. "<br>");
echo("r3 ".$matrix[2][0] . "  " . $matrix[2][1] . " " . $matrix[2][2]. "<br><br>");


echo("Method 2 for printing multidimensional arrays using for loop <br>");
for ($row = 0; $row <=2; $row++) {
    for ($col = 0; $col <= 2; $col++) {
    echo ($matrix[$row][$col]." ");
  }
  echo "<BR>";
}
?>
</body>
</html>