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
 * MySQLi Procedural
 * Check connection
 */

// if (!$conn) {
//     die("Connection failed: " . mysqli_connect_error());
//   }

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE) {
// if (mysqli_query($conn, $sql)) {   
    echo "Table MyGuests create successfully";
} else {
    "Error creating table: " . $conn->error;
} 

$conn->close();
// mysqli_close($conn);

?>
