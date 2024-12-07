<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

/**
 * Except that we have added one single line of code to retrieve the ID of the last inserted record.
 * We also echo the lst inserted ID.
 */

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: ". $conn->connect_error);
}

$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Tan', 'Nguyen', 'nguyenngoctanpro15@gmail.com')";

if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: ". $last_id;
} else {
    echo "Error: ". $sql. "<br>". $conn->error;
}

$conn->close();
?>