<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO</title>
</head>
<body>

<?php
echo "<table style='border: solid 1px black;'>";
echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  /**
   * Summary of current
   * @return string
   */
  function current() {
    return "<td style='width: 150px; border: 1px solid black;'>" . parent::current(). "</td>";
  }

  /**
   * Summary of beginChildren
   * @return void
   */
  function beginChildren() {
    echo "<tr>";
  }

  /**
   * Summary of endChildren
   * @return void
   */
  function endChildren() {
    echo "</tr>" . "\n";
  }
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDBPDO";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, firstname, lastname FROM MyGuests WHERE lastname='Tan'");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?>
    
</body>
</html>