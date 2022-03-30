<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>
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

// sql query for where clause
$sql = "SELECT * FROM employee where salary>='50000'";
$res = mysqli_query($conn, $sql);

 //mysqli_num_rows checks if there are more than zero rows returned.
// mysqli_fetch_array returns the next row from the result set as an array.
// output data of each row

  if (mysqli_num_rows($res) > 0) {
echo("<table><tr><th>Employee ID</th><th>Employee Name</th><th> Salary </th><th>Designation</th></tr>");
 while($row = mysqli_fetch_array($res)) {
echo("<tr><td>" . $row["emp_id"]. "</td><td>" . $row["emp_name"]. "</td><td>" . $row["salary"]. "</td><td>". $row["designation"]."</td></tr>");
  }
echo("</table>");
} else {
  echo ("No results found");
} 

mysqli_close($conn);
?>

</body>
</html>