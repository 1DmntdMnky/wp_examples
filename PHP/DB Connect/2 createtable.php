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

// sql query to create table
$sql = "CREATE TABLE student (
roll_no INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(30) NOT NULL,
last_name VARCHAR(30) NOT NULL,
email_id VARCHAR(50)
)";

if (mysqli_query($conn, $sql)) {
  echo("student table created successfully <br><br>");
} else {
  echo("Error creating table:<br><br>" . mysqli_error($conn));
}

mysqli_close($conn);
?>