<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order By</title>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

/**
 * The ORDER BY clause is used to sort the result-set in ascending or descending order.
 * The ORDER BY clause sorts the records in ascending order by default. To sort the records in descending order, use the DESC keyword.
 */
$sql = "SELECT id, firstname, lastname FROM MyGuests ORDER BY lastname";
$result = $conn->query($sql);

/**
 * Then, the function num_rows() checks if there are more than zero rows returned.
 * If there are more than zero rows returned, the function fetch_assoc() puts all the results into an associative array that we can loop through.
 * The while() loop loops through the result set and outputs the data from the id, firstname and lastname columns.
 */
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";
    echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"]. " " . $row["lastname"]. "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>
    
</body>
</html>