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

// sql query to delete data from the table
$sql = "DELETE FROM student where last_name='Mathew'";
if (mysqli_query($conn, $sql)) {
  echo("Data deleted successfully");
} else {
  echo("Error deleting record: " . mysqli_error($conn));
}

mysqli_close($conn);
?>