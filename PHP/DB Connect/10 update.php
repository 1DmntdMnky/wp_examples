<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "demo";

// Create and check database connection
$conn = mysqli_connect($hostname, $username, $password, $db);
if (!$conn) {
  echo("Connection failed: <br><br> " . mysqli_connect_error());
}

// sql query to update data in the table
$sql = "UPDATE student SET email_id='johndoe@yahoo.com' where first_name='John'";
if (mysqli_query($conn, $sql)) {
  echo("Data updated successfully");
} else {
  echo("Error updating data: " . mysqli_error($conn));
}

mysqli_close($conn);
?>