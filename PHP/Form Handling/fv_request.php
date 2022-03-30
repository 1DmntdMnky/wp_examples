<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname"><br><br>
  Email Id: <input type="text" name="email"><br><br>
  <input type="submit"><br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if ($name=="") {
        echo "Please enter a valid name";
    } else {
        echo("Welcome ". $name."<br><br>");
    }

   $eid=$_REQUEST['email'];
    if ($eid=="") {
        echo "Please enter a valid email address";
    } else {
        echo("Your email id is : ". $eid);
    }
}
?>

</body>
</html>