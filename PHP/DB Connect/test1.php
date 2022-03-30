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
$sql = "CREATE TABLE employee (
emp_id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
emp_name VARCHAR(30) NOT NULL,
salary int(7) NOT NULL,
designation VARCHAR(50) not null
);";

$sql .= "insert into employee (emp_name, salary, designation)
values ('Ashley', '55000', 'manager');";
$sql .= "insert into employee (emp_name, salary, designation)
values ('Zane', '60000', 'project manager');";
$sql .= "insert into student (first_name, last_name, email_id)
values ('Damien', '45000', 'developer')";

if (mysqli_multi_query($conn, $sql)) {
  echo("employee table created successfully <br><br>");
} else {
  echo("Error creating table:<br><br>" . mysqli_error($conn));
}

mysqli_close($conn);
?>