<html>
<body>
<h1> PHP File Handling</h1>

<?php

//fopen() is used to open a file in various modes.
//fread() specifies the file to read from and also number of bytes to be read
//fclose() closes an open file

$file1 = fopen("sample.txt", "r") or die("Unable to open file!");
echo fread($file1,filesize("sample.txt"));
echo("<br><br>");
fclose($file1);



//fgets() is used to read single line from the file.

$file2 = fopen("sample.txt", "r") or die("Unable to open file!");
echo fgets($file2);
echo("<br><br>");
fclose($file2);



//feof() checks if the "end-of-file" (EOF) has been reached and is used to loop through the data whose length is not known

$file3 = fopen("sample.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file
while(!feof($file3)) {
  echo fgets($file3) . "<br>";
}
echo("<br><br>");
fclose($file3);


//fgetc() reads single character from the file

$file4 = fopen("sample.txt", "r") or die("Unable to open file!");
 echo fgetc($file4)."<br>";
 echo fgetc($file4)."<br>";
while(!feof($file4)) {
  echo fgetc($file4);
}
fclose($file4);

?>
</body>
</html>





