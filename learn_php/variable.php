<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = 10;
$c = 5;

function myTest() {
  global $x, $y, $c;
  $y = $x + $y + $c;
} 
myTest();
echo "number: $y year";
echo "<br>";
echo "number: " . $y . " year";
?>

</body>
</html>
