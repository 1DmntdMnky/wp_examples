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

// sql query to delete the entire table
$sql = "drop table student";
if (mysqli_query($conn, $sql)) {
  echo("Table deleted successfully");
} else {
  echo("Error deleting the table: " . mysqli_error($conn));
}

mysqli_close($conn);
?>