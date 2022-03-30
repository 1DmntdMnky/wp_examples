<?php
$hostname = "localhost";
$username = "root";
$password = "";
$db = "demo1";

// Create and check database connection
$conn = mysqli_connect($hostname, $username, $password, $db);
if (!$conn) {
  echo("Connection failed: <br><br> " . mysqli_connect_error());
}

// sql query to insert data into the table
$sql = "insert into nametable (firstname, lastname) 
values ('$_POST[fname]', '$_POST[lname]')";

if (mysqli_query($conn, $sql)) {
  echo("Data added successfully <br><br>");
} else {
  echo("Error adding data into the table:<br><br>" . mysqli_error($conn));
}

mysqli_close($conn);
?>