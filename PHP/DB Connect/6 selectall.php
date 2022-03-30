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

// sql query to select all the data from the table
$sql = "SELECT * FROM student";
$res = mysqli_query($conn, $sql);

 if (mysqli_num_rows($res) > 0) { 

//mysqli_num_rows checks if there are more than zero rows returned.
// mysqli_fetch_array returns the next row from the result set as an array.
// output data of each row

  while($row = mysqli_fetch_array($res)) {
    echo("Roll_No: " . $row["roll_no"]. " - Name: " . $row["first_name"]. " " . $row["last_name"]. " - Email Id : ". $row["email_id"]."<br>");
  }
} else {
  echo ("No results found");
} 



mysqli_close($conn);
?>

