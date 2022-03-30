<html>
<body>
<h1> PHP File Handling</h1>

<?php

//fopen() is used to open a file in various modes.
//fwrite() is used to write to a file

$file1 = fopen("sample1.txt", "a") or die("Unable to open file!");
$x="Welcome to world of PHP";
fwrite($file1,$x);
fclose($file1);


?>
</body>
</html>
