<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = "Hello world!";
$z = 'Hello world!';
$a = 3.14;
$b = true;

//You can get the data type of any object by using the var_dump() function.
var_dump($x);
echo "<br>";

/**
 * A string can be any text inside quotes.
 * You can use single or double quotes.
 */
var_dump($y);
echo "<br>"; 
var_dump($z);   

//A float (floating point number) is a number with a decimal point or a number in exponential form.
echo "<br>";
var_dump($a);

//A Boolean represents two possible states: TRUE or FALSE.
echo "<br>";
var_dump($b);

//An array stores multiple values in one single variable.
echo "<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

//Classes and objects are the two main aspects of object-oriented programming.
echo "<br>";
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
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);

  //Null is a special data type which can have only one value: NULL.
  echo "<br>";
  $print = "Hello world";
  $print = null;
  var_dump($print);
 
  /**
   * If you assign an integer value to a variable, the type will automatically be an integer.
   * If you assign a string to the same variable, the type will change to a string.
   */
  $c = 5;
  var_dump($c);
  echo "<br>";
  $c = "Hello word";
  var_dump($c);

  //Casting allows you to change data type on variables.
  echo "<br>";
  $d = 10;
  $d = (string) $d;
  var_dump($d);

?>

</body>
</html>
