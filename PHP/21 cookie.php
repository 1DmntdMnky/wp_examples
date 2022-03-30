<!DOCTYPE html>
<?php
$cookie_name = "cookie2";
$cookie_value = "Ashley Liam, 50 years, ashleyl23@gmail.com, 1234567890, New York";
setcookie($cookie_name, $cookie_value, time() + (3600*6), "/"); // 3600 sec = 1 hour
?>                 
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
     echo ($cookie_name . " is not set!");
} else {
     echo ($cookie_name . " is set!<br>");
     echo ("Its value is: " . $_COOKIE[$cookie_name]);
}
?>

</body>
</html>