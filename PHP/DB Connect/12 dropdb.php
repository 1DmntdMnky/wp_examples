<?php
$hostname = "localhost";
$username = "root";
$password = "";

// Create and check database connection
$conn = mysqli_connect($hostname, $username, $password);
if (!$conn) {
  echo("Connection failed: <br><br> " . mysqli_connect_error());
}

// sql query to delete the database
$sql = "drop database demo";
if (mysqli_query($conn, $sql)) {
  echo("Database deleted successfully");
} else {
  echo("Error deleting the database: " . mysqli_error($conn));
}

mysqli_close($conn);
?>