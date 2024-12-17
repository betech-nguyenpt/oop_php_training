<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Examples</title>
</head>
<h1>My first PHP page</h1>
<body>

<?php
/**
 * PHP Syntax
 */
echo "Hello World" . "<br>";

ECHO "Hello World!<br>";       // error
echo "Hello World!<br>";       // yes
EcHo "Hello World!<br>";       // error

$color = "red";
echo "My car is " . $color . "<br>";   // yes
echo "My car is " . $COLOR . "<br>";   // error
echo "My car is " . $coLOR . "<br>";   // error

/**
 * PHP Comments
 */
// You can also use comment to have leave out parts of a code line
$x = 5 /* +15 */ + 5;
echo $x;

/**
 * PHP Variables
 */
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;

function myTest() {
    $c = 5;
    // Using x inside this function will generate an error
    echo "<p>Variable x inside function is: $c</p>";
}
myTest();
echo "<p>Variable x outside function is: $c</p>";

function myTest1() {
    global $x, $y;
    $y = $x + $y;
}
myTest1(); // run function
echo $y;   // output the new value for variable $y
echo "<br>";

function myTest2() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
  } 
  
  myTest2();
  echo $y;
  echo "<br>";

  function myTest3() {
    static $x = 0;
    echo $x;
    $x++;
  }
  
  myTest3();
  echo "<br>";
  myTest3();
  echo "<br>";
  myTest3();
?>

<?php  
/**
 * PHP Echo and Print
 */
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

echo "<h2>$txt1</h2>";
echo "<p>Study PHP at $txt2</p>";
?>

<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>

<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";

print "<h2>$txt1</h2>";
print "<p>Study PHP at $txt2</p>";
?>

<?php
/**
 * PHP Data Types
 */
// PHP string
$x = "Hello world!";
$y = 'Hello world!';

var_dump($x);
echo "<br>"; 
var_dump($y);
echo "<br>";

// PHP integer
$x = 5985;
var_dump($x);
echo "<br>";

// PHP float
$x = 10.365;
var_dump($x);
echo "<br>";

// PHP array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
echo "<br>";

// PHP object
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Volvo");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "Toyota");
  echo $myCar -> message();
  echo "<br>";

// PHP NULL value
$x = "Hello world!";
$x = null;
var_dump($x);
echo "<br>";
?>

<?php
/**
 * PHP Numbers
 */
// Checks if the type of a variable is integer
$x = 5985;
var_dump(is_int($x));

echo "<br>";

$x = 59.85;
var_dump(is_int($x)); // Check again... 
echo "<br>";

// Check if the type of a variable is float 
$x = 10.365;
var_dump(is_float($x));
echo "<br>";

// Check if a numeric value is finite or infinite 
$x = 1.9e411;
var_dump($x);
echo "<br>";

// Invalid calculation will return a NaN value
$x = acos(8);
var_dump($x);
echo "<br>";

// Check if the variable is numeric   
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
echo "<br>";

// Cast float to int 
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;
  
echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";
?>

<?php
/**
 * PHP Math
 */
// Find the value of PI
echo(pi());
echo "<br>";

// Find the lowest and highest value in a list of arguments
echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));
echo "<br>";

// Find the absolute (positive) value of a number
echo(abs(-6.7));
echo "<br>";

// Find the square root of a number
echo(sqrt(64) . "<br>");
echo(sqrt(0) . "<br>");
echo(sqrt(1) . "<br>");
echo(sqrt(9));
echo "<br>";

// Round a floating-point number to its nearest integer
echo(round(0.60) . "<br>");
echo(round(0.50) . "<br>");
echo(round(0.49) . "<br>");
echo(round(-4.40) . "<br>");
echo(round(-4.60));
echo "<br>";

// Generate a random number
echo(rand());
echo "<br>";

// Generate a random number between 10 and 100
echo(rand(10, 100));
echo "<br>";
?>

<?php
/**
 * PHP Constants
 */
// case-sensitive constant name
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;

// case-insensitive constant name
define("hello", "Welcome is to W3Schools.com!", true);
echo hello;
echo "<br>";

// Create a Array constant with define()
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
  ]);
  echo cars[0];
  echo "<br>";

// Uue a constant inside a function (WHen it is defined outside the function)
define("GREETINGg", "Welcome to W3Schools.com!");

function myTest4() {
  echo GREETINGg;
}
 
myTest4();
echo "<br>";
?>

<?php
/**
 * PHP Operators
 */
// Arithmetic Operators: Addition (+)
$x = 10;  
$y = 6;

echo $x + $y;
echo "<br>";

// Arithmetic Operators: Subtraction (-)
$x = 10;  
$y = 6;

echo $x - $y;
echo "<br>";

// Arithmetic Operators: Multiplication (*)
$x = 10;  
$y = 6;

echo $x * $y;
echo "<br>";

// Arithmetic Operators: Division (/)
$x = 10;  
$y = 6;

echo $x / $y;
echo "<br>";

// Arithmetic Operators: Modulus (%)
$x = 10;  
$y = 6;

echo $x % $y;
echo "<br>";

// Assignment Operators: x = y
$x = 10;  
echo $x;
echo "<br>";

// Assignment operator: x += y
$x = 20;  
$x += 100;

echo $x;
echo "<br>";

// Assignment operator: x -= y
$x = 50;
$x -= 30;

echo $x;
echo "<br>";

// Assignment operator: x *= y
$x = 10;
$x *= 5;

echo $x;
echo "<br>";

// Assignment operator: x /= y
$x = 100;
$x /= 5;

echo $x;
echo "<br>";

// Assignment operator: x %= y
$x = 10;
$x %= 3;

echo $x;
echo "<br>";

// Comparison Operators: Equal (==)
$x = 100;  
$y = "100";

var_dump($x == $y);
echo "<br>";

// Comparison Operators: Identical (===)
$x = 100;  
$y = "100";

var_dump($x === $y);
echo "<br>";

// Comparison Operators: Not equal (!=)
$x = 100;  
$y = "100";

var_dump($x!= $y);
echo "<br>";

// Comparison Operators: Not equal (<>)
$x = 100;  
$y = "100";

var_dump($x <> $y);
echo "<br>";

// Comparison Operators: Not identical (!==)
$x = 100;  
$y = "100";

var_dump($x!== $y);
echo "<br>";

// Comparison Operators: Greater than (>)
$x = 100;  
$y = 50;

var_dump($x > $y);
echo "<br>";

// Comparison Operators: Less than (<)
$x = 100;  
$y = 50;

var_dump($x < $y);
echo "<br>";

// Comparison Operators: Greater than or equal to (>=)
$x = 100;  
$y = 50;

var_dump($x >= $y);
echo "<br>";

// Comparison Operators: Less than or equal to (<=)
$x = 100;  
$y = 50;

var_dump($x <= $y);
echo "<br>";

// Comparison Operators: Spaceship (<=>)
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
echo "<br>";

// Increment operator: ++$x
$x = 10;  
echo ++$x;
echo "<br>";

// Increment operator: $x++
$x = 10;  
echo $x++;
echo "<br>";

// Decrement operator: --$x
$x = 10;  
echo --$x;
echo "<br>";

// Decrement operator: $x--
$x = 10;  
echo $x--;
echo "<br>";

// Logical operator: and
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
echo "<br>";

// Logical operator: or
$x = 100;  
$y = 50;

if ($x == 100 or $y == 50) {
    echo "Hello world!";
}
echo "<br>";

// Logical operator: xor
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 50) {
    echo "Hello world!";
}
echo "<br>";

// Logical operator: && (and)
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
echo "<br>";

// Logical operator: || (or)
$x = 100;  
$y = 50;

if ($x == 100 || $y == 50) {
    echo "Hello world!";
}
echo "<br>";

// Logical operator: (not)
$x = 100;

if (!$x) {
    echo "Hello world!";
}
echo "<br>";

// String operator: Concatenation of $xtx1 and $xtx2
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
echo "<br>";

// String operator: Appends $txt2 to $txt1
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1.=$txt2;
echo "<br>";

// Array operator: Union (+)
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y);
echo "<br>";

// Array operator: Equality (==)
$x = array("a" => "red", "b" => "green");  
$y = array("a" => "blue", "b" => "yellow");  

var_dump($x == $y);
echo "<br>";

// Array operator: Identity (===)
$x = array("a" => "red", "b" => "green");  
$y = array("a" => "blue", "b" => "yellow");  

var_dump($x === $y);
echo "<br>";

// Array operator: Inequality (!=)
$x = array("a" => "red", "b" => "green");  
$y = array("a" => "blue", "b" => "yellow");  

var_dump($x!= $y);
echo "<br>";

// Array operator: Inequality (<>)
$x = array("a" => "red", "b" => "green");  
$y = array("a" => "blue", "b" => "yellow");  

var_dump($x <> $y);
echo "<br>";

// Array operator: Non-identity (!==)
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);
echo "<br>";

// Conditional assignment operator: Ternary (?:)
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo "<br>";

// Conditional assignment: Null coalescing(??)
echo $user = $_GET["user"] ?? "anonymous";
echo("<br>");

echo $color = $color ?? "red";
echo "<br>";
?> 

<?php
/**
 * PHP If...Else and Switch Statements
 */
// The if statement
$t = date("H");

if ($t < "20") {
  echo "Have a good day!";
}
echo "<br>";

// The if...else statement
$t = date("H");

if ($t < "10") {
  echo "Good morning!";
} else {
  echo "Good afternoon!";
}
echo "<br>";

// The if...else if...else statement
$t = date("H");
echo "<p>The hour (of the server) is " . $t; 
echo ", and will give the following message:</p>";

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "<br>";

// The switch statement
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";
?>

<?php
/**
 * PHP While and For Loops
 */
// The while loop
$x = 1;
 
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
echo "<br>";

// The do...while loop
$x = 1;
 
do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
echo "<br>";

// The for loop
for ($x = 0; $x <= 5; $x++) {
  echo "The number is: $x <br>";
}
echo "<br>";

// The foreach loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  echo "The color is: $x <br>";
}
echo "<br>";

// The break statement in a loop
for ($x = 0; $x <= 5; $x++) {
  if ($x == 3) {
    break;
  }
  echo "The number is: $x <br>";
}
echo "<br>";

// The continue statement in a loop
for ($x = 0; $x <= 5; $x++) {
  if ($x == 3) {
    continue;
  }
  echo "The number is: $x <br>";
}
echo "<br>";
?>

<?php
/**
 * PHP Functions
 */
// Create a function
function writeMsg() {
    echo "Hello world!";
  }
  
  writeMsg();
  echo "<br>";

// Function with two arguments
function familyNames($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
  }
  
  familyNames("Hege","1975");
  familyNames("Stale","1978");
  familyNames("Kai Jim","1983");

// Function with one argument
function familyName($fname) {
    echo "$fname Refsnes.<br>";
  }
  
  familyName("Jani");
  familyName("Hege");
  familyName("Stale");
  familyName("Kai Jim");
  familyName("Borge");

// Function with default argument value
function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight();
  setHeight(135);
  setHeight(80);

// Function that returns a value
function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5,10) . "<br>";
  echo "7 + 13 = " . sum(7,13) . "<br>";
  echo "2 + 4 = " . sum(2,4);
  echo "<br>";

// Return type declarations
function addNumbers(float $a, float $b) : float {
    return $a + $b;
  }
  echo addNumbers(1.2, 5.2); 
  echo "<br>";

// Passing arguments by reference
function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;
  echo "<br>";
?>

<?php
/**
 * PHP Arrays
 */
// Indexed arrays
$cars = array("Volvo", "BMW", "Toyota"); 
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "<br>";

// count() - Return the length of an array
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
echo "<br>";

// Loop through an indexed array
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

// Associative arrays
$person = array("name" => "Tan", "age" => 30, "city" => "An Giang");
echo "Name: " . $person["name"];
echo "<br>";
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
echo "<br>";

// Loop through an associative array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
  echo "Key: ". $x. ", Value: ". $x_value;
  echo "<br>";
}
?>

<?php
/**
 * PHP Multidimensional Arrays
 */
// Output elements from a multidimensional array
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
    
  echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
  echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
  echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
  echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

// Loop through a multidimensional array
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
  );
      
  for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
  }
?>

<?php
/**
 * PHP Sorting Arrays
 */
// sort() - Sort array in ascending alphabetical order
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

// rsort() - Sort array in descending alphabetical order
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);

$clength = count($cars);
for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
}

// sort() - Sort array in ascending numerical order
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}

// rsort() - Sort array in descending numerical order
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);

$arrlength = count($numbers);
for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}

// asort() - Sort array in ascending order, association to value
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);

foreach($age as $x => $x_value) {
  echo "Key: ". $x. ", Value: ". $x_value;
  echo "<br>";
}

// ksort() - Sort array in ascending order, according to key
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);

foreach($age as $x => $x_value) {
  echo "Key: ". $x. ", Value: ". $x_value;
  echo "<br>";
}

// arsort() - Sort array in descending order, association to value
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);

foreach($age as $x => $x_value) {
  echo "Key: ". $x. ", Value: ". $x_value;
  echo "<br>";
}

// krsort() - Sort array in descending order, according to key
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);

foreach($age as $x => $x_value) {
  echo "Key: ". $x. ", Value: ". $x_value;
  echo "<br>";
}
?>
</body>
</html>