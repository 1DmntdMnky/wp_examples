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

// sql query to select data from the table
$sql = "SELECT roll_no, first_name, last_name FROM student";
$res = mysqli_query($conn, $sql);

/* if (mysqli_num_rows($res) > 0) { 

//mysqli_num_rows checks if there are more than zero rows returned.
// mysqli_fetch_array returns the next row from the result set as an array.
// output data of each row

  while($row = mysqli_fetch_array($res)) {
    echo("Roll_No: " . $row["roll_no"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. "<br>");
  }
} else {
  echo ("No results found");
} */

// To display result in HTML Table

if (mysqli_num_rows($res) > 0) {
echo("<table><tr><th>Roll No</th><th>Student Name</th></tr>");
 while($row = mysqli_fetch_array($res)) {
echo("<tr><td>" . $row["roll_no"]. "</td><td>" . $row["first_name"]. " " . $row["last_name"]. "</td></tr>");
  }
echo("</table>");
} else {
  echo ("No results found");
}

mysqli_close($conn);
?>

</body>
</html>