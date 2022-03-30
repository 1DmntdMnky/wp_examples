<html>
<body>
<h1> Strings in PHP </h1>

<?php
// strlen() returns length of the string
echo ("The length of the string is : " . strlen("Welcome to PHP")."<br><br>");  

// str_word_count() counts and returns number of words in the string
echo ("The no of words in the string are : " . str_word_count("Welcome to PHP")."<br><br>"); 

// strrev() reverses the string
echo ("The reverse of string Welcome to PHP is : " . strrev("Welcome to PHP")."<br><br>"); 
 
// strpos() is used to search for text within a string and it returns character index of the first character of the matched text
echo ("The text to is at index : " . strpos("Welcome to PHP", "to")."<br><br>");

// str_replace() replaces text within a string with another text
echo ("Replace PHP with JavaScript in Welcome to PHP :  " . str_replace("PHP", "JavaScript", "Welcome to PHP")."<br><br>");

echo ("<h1> Another method of working with strings using variable </h1><br>");

$s="Welcome to PHP";

// strlen() returns length of the string
echo ("The length of the string is : " . strlen($s)."<br><br>");  

// str_word_count() counts and returns number of words in the string
echo ("The no of words in the string are : " . str_word_count($s)."<br><br>"); 

// strrev() reverses the string
echo ("The reverse of string Welcome to PHP is : " . strrev($s)."<br><br>"); 
 
// strpos() is used to search for text within a string and it returns character index of the first character of the matched text
echo ("The text to is at index : " . strpos($s, "to")."<br><br>");

// str_replace() replaces text within a string with another text
echo ("Replace PHP with JavaScript in Welcome to PHP :  " . str_replace("PHP", "JavaScript", $s)."<br><br>");
?>

</body>
</html>