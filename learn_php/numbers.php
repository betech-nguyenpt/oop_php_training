<!DOCTYPE html>
<html>
<body>
<?php
  /*Check if the type of a variable is integer:*/
$x = 5985;
var_dump(is_int($x));
echo "<br>";
$x = 59.85;
var_dump(is_int($x));
echo "<br>";
/*Check if the type of a variable is float:*/
var_dump(is_float($x));
echo "<br>";
/*Check if a numeric value is finite or infinite:*/
$y = 1.9e411;
var_dump($y);
var_dump($x);
echo "<br>";
/*Invalid calculation will return a NaN value:*/
$z = acos(15);
var_dump($z);
echo "<br>";
/*The PHP is_numeric() function can be used to find whether a variable is numeric. The function returns true if the variable is a number or a numeric string, false otherwise.*/
$d = "Tan";;
var_dump(is_numeric($d));
echo "<br>";
var_dump(is_numeric($x));
echo "<br>";
/*The (int), (integer), and intval() functions are often used to convert a value to an integer.*/
$e = 15.02;
$int_cast = (int)$e;
echo $int_cast;
echo "<br>";
$f = "15.02";
$int_cast = (int)$f;
echo $int_cast;
echo"<br>";
?>  
<pre>
</pre>
</body>
</html>
