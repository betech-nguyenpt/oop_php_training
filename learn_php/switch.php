<!DOCTYPE html>
<html>
<body>

<?php
/**
 * This is how it works:
 * The value of the expression is compared with the values of each case
 * If there is a match, the associated block of code is executed
 * The break keyword breaks out of the switch block
 * The default code block is executed if there is no match
 */
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
/**
 * What happens if we remove the break statement from case "red"?
 * $favcolor is red, so the code block from case "red" is executed
 * But since it has no break statement, the code block from case "blue" will also be executed.
 */
$favcolor = "red";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
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
/**
 * If no cases get a match, the default block is executed:
 */
$a = 3;

switch ($a) {
  case 0:
    echo "Today is Saturday";
    break;
  case 1:
    echo "Today is Sunday";
    break;
  default:
    echo "Looking forward to the Weekend";
}
echo "<br>";
/**
 * The default case does not have to be the last case in a switch block, but not recommended.
 */
$d = 4;

switch ($d) {
  default:
    echo "Looking forward to the Saturday";
    break;
  case 6:
    echo "Today is Weekend";
    break;
  case 0:
    echo "Today is Sunday";
}
echo "<br>";
/**
 * If you want multiple cases to use the same code block:
 * You can specify the cases like this.
 */
$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The week feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}

?>
 
</body>
</html>