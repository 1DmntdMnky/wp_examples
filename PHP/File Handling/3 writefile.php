<html>
<body>
<h1> PHP File Handling</h1>

<?php

//fopen() is used to open a file in various modes.
//fwrite() is used to write to a file

$file1 = fopen("sample1.txt", "w") or die("Unable to open file!");
$x="Hello World !!!\nI am learning PHP\n";
fwrite($file1,$x);
$x="How r u?";
fwrite($file1,$x);
fclose($file1);

$file2 = fopen("sample1.txt", "w") or die("Unable to open file!");
$x="Hello World !";
fwrite($file2,$x);
fclose($file2); 
?>
</body>
</html>
