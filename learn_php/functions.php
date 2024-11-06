<!DOCTYPE html>
<html>
<body>

<?php
//To call the function, just write its name followed by parentheses ():
function myMessage() {
  echo "Hello family!";
}

myMessage();
echo "<br/>";
//The following example has a function with two arguments "($fname, $year)".
function familyName($fname, $year) {
    if ($fname == "Ngan") {
        echo "$fname Huynh. Born in $year <br>";
    } else {
        echo "$fname Nguyen. Born in $year <br>";
    }
  }
  
  familyName("Tan","2001");
  familyName("Ty","2001");
  familyName("Ngan","2000");
  echo "<br/>";
  //If we call the function "setHeight()" without arguments it takes the default value as argument.
  function setHeight($minheight = 50) {
    echo "The height is : $minheight <br>";
  }
  
  setHeight(350);
  setHeight();
  setHeight(135);
  setHeight(80);
  echo "<br/>";
  //To let a function return a value, use the "return" statement.
  function sum($x, $y) {
    $z = $x + $y;
    return $z;
  }
  
  echo "5 + 10 = " . sum(5,10) . "<br>";
  echo "7 + 13 = " . sum(7,13) . "<br>";
  echo "2 + 4 = " . sum(2,4);
  echo "<br/>";
  //Use a pass-by-reference argument to update a variable.
  function add_five(&$value) {
    $value += 5;
  }
  
  $num = 2;
  add_five($num);
  echo $num;
  echo "<br/>";
  /**
   * By using the "..." operator in front of the function parameter
   * The function accepts an unknown number of arguments
   * This is also called a variadic function.
   */
  function sumMyNumbers(...$x) {
    $n = 0;
    $len = count($x);
    for($i = 0; $i < $len; $i++) {
      $n += $x[$i];
    }
    return $n;
  }
  
  $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
  echo $a;
  echo "<br/>";
  //You can only have one argument with variable length, and it has to be the last argument.
  function myFamily($lastname, ...$firstname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
      $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
  }
  
  $a = myFamily("Doe", "Jane", "John", "Joey");
  echo $a;

  //If the variadic argument is not the last argument, you will get an ERROR.

  /*function myFamily(...$firstname, $lastname) {
    $txt = "";
    $len = count($firstname);
    for($i = 0; $i < $len; $i++) {
      $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
    }
    return $txt;
  }
  
  $a = myFamily("Doe", "Jane", "John", "Joey");
  echo $a;
  */
echo "<br>";
/**
 * we try to send both a number and a string to the function without using "strict"
 * Since strict is NOT enabled "5 days" is changed to int(5), and it will return 10.
 */
function addNumbers(int $a, int $b) {
    return $a + $b;
  }
  echo addNumbers(5, 5); 
  echo "<br>"; 

?> 

</body>
</html>