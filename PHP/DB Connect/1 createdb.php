<?php
include 'dbconnect.php';
$sql = "CREATE DATABASE demo";

//mysqli_query() function performs a query against a database.

if (mysqli_query($conn, $sql)) {    
  echo "Database created successfully";
} else {
  echo "Error creating database: " . mysqli_error($conn);
}

//mysqli_close() function closes a previously opened database connection.

mysqli_close($conn);
?>

