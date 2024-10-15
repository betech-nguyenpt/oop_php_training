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

myTest();  // run function
echo "number: $y year"; // output the new value for variable $y
echo "<br>";
echo "number: " . $y . " year"; // output the new value for variable $y
?>

</body>
</html>
