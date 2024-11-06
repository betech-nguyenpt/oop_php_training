<!DOCTYPE html>
<html>
<body>

<?php  
//The "while" loop executes a block of code as long as the specified condition is true.
$i = 1;

while ($i < 6) {
  echo $i;
  $i++;
} 
echo "<br/>";
//With the "break" statement we can stop the loop even if the condition is still true.
$i = 1;

while ($i < 6) {
  if ($i == 3) break;  
  echo $i;
  $i++;
} 
echo "<br>";
//With the "continue" statement we can stop the current iteration, and continue with the next.
$i = 0;

while ($i < 6) {
  $i++;
  if ($i == 3) continue;  
  echo $i;
} 
echo "<br>";
//The "while" loop syntax can also be written with the "endwhile" statement like this
$i = 1;

while ($i < 6):
  echo $i;
  $i++;
endwhile;
echo "<br>";
/**
 * If you want the while loop count to 100, but only by each 10:
 * You can increase the counter by 10 instead 1 in each iteration.
 */
$i = 0;

while ($i < 100) {
  $i+=10;
  echo "$i<br>";
}
/**
 * The "do...while" loop will always execute the block of code at least once
 * It will then check the condition, and repeat the loop while the specified condition is true.
 */
$i = 1;

do {
  echo $i;
  $i++;
} while ($i < 6);
echo "<br>";
/**
 * In a "do...while" loop the condition is tested AFTER executing the statements within the loop.
 * This means that the "do...while" loop will execute its statements at least once, even if the condition is false.
 */
$i = 8;

do {
  echo $i;
  $i++;
} while ($i < 6);
echo "<br>";
//With the "break" statement we can stop the loop even if the condition is still true.
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
echo "<br>";
//With the "continue" statement we can stop the current iteration, and continue with the next.
$i = 0;

do {
  $i++;
  if ($i == 3) continue;
  echo $i;
} while ($i < 6);
echo "<br>";
//The "for" loop is used when you know how many times the script should run.
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
  }
  echo "<br>";
  //With the "break" statement we can stop the loop even if the condition is still true.
  for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) break;
    echo "The number is: $x <br>";
  }
    echo "<br>";
    //With the "continue" statement we can stop the current iteration, and continue with the next:
    for ($x = 0; $x <= 10; $x++) {
        if ($x == 3) continue;
        echo "The number is: $x <br>";
  }
  echo "<br>";
  //The most common use of the "foreach" loop, is to loop through the items of an array.
  $colors = array("red", "green", "blue", "yellow"); 

foreach ($colors as $x) {
  echo "$x <br>";
}
echo "<br>";
//This can be done by specifying both the key and value in the "foreach" defintition, like this.
$members = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach ($members as $x => $y) {
  echo "$x : $y <br>";
}
echo "<br>";
//The "foreach" loop can also be used to loop through properties of an object.
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
  }
  
  $myCar = new Car("red", "Volvo");
  
  foreach ($myCar as $x => $y) {
    echo "$x: $y<br>";
  }
  echo "<br>";
  //With the "break" statement we can stop the loop even if it has not reached the end.
  $colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}
echo "<br>";
//With the "continue" statement we can stop the current iteration, and continue with the next.
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") continue;
  echo "$x <br>";
  
}

?>  

<pre>
<?php
/**
 * When looping through the array items
 * Any changes done to the array item will, by default.
 * NOT affect the original array.
 */
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") $x = "pink";
  
}

var_dump($colors);
echo "<br>";
//The "foreach" loop syntax can also be written with the "endforeach" statement like this.
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) :
  echo "$x <br>";
endforeach;
echo "<br>";
//The "break" statement can be used to jump out of a for loop.
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
      break;
    }
    echo "The number is: $x <br>";
  }
  echo "<br>";
  //The "break" statement can be used to jump out of a "while" loop.
  $x = 0;
 
while($x < 10) {
  if ($x == 4) {
    break;
  }
  echo "The number is: $x <br>";
  $x++;
} 
echo "<br>";
//The "break" statement can be used to jump out of a "do...while" loop.
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);
echo "<br>";
//The "break" statement can be used to jump out of a "foreach" loop.
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $x) {
  if ($x == "blue") break;
  echo "$x <br>";
}
?>
</pre>

</body>
</html>