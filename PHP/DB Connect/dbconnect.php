<?php
$hostname = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($hostname, $username, $password); 
//mysqli_connect() function opens a new connection to the MySQL server.

// Check connection
if (!$conn) {
  echo("Connection failed: <br><br>" . mysqli_connect_error()); //mysqli_connect_error() function returns the error description 
}
else
{
echo ("Connected successfully <br><br>");
}
?>

