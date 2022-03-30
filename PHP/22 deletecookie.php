<!DOCTYPE html>
<?php
$cookie_name = "cookie1";
$cookie_value = "John Doe";
// set the expiration date to one hour ago
setcookie($cookie_name, $cookie_value, time() - 3600)
?>
<html>
<body>

<?php
echo ($cookie_name. " is deleted.");
?>

</body>
</html>