<!DOCTYPE html>
<html>
<body>

<?php
/**
 * An iterable is any value which can be looped through with a "foreach()" loop.
 * The "iterable" keyword can be used as a data type of a function argument or as the return type of a function.
 */
/**
 * Summary of printIterables
 * @param iterable $myIterable
 * @return string
 */
function printIterables(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

$arr = ["a", "b", "c"];
printIterables($arr);
echo "<br>";

// Return an iterable
/**
 * Summary of getIterables
 * @return iterable
 */
function getIterables():iterable {
    return ["a", "b", "c"];
  }
  
  $myIterable = getIterables();
  foreach($myIterable as $item) {
    echo $item;
  }

  /**
   * "current()" - Returns the element that the pointer is currently pointing to. It can be any data type.
   * "key()" Returns the key associated with the current element in the list. It can only be an integer, float, boolean or string.
   * "next()" Moves the pointer to the next element in the list.
   * "rewind()" Moves the pointer to the first element in the list.
   * "valid()" If the internal pointer is not pointing to any element.
   * (for example, if next() was called at the end of the list), this should return false. It returns true in any other case.
   */
// Create an Iterator
class MyIterator implements Iterator {
  private $items = [];
  private $pointer = 0;

  /**
   * Summary of __construct
   * @param array $items
   */
  public function __construct($items) {
    // array_values() makes sure that the keys are numbers
    $this->items = array_values($items);
  }

  /**
   * Summary of current
   * @return string
   */
  public function current() {
    return $this->items[$this->pointer];
  }

  /**
   * Summary of key
   * @return int
   */
  public function key() {
    return $this->pointer;
  }

  /**
   * Summary of next
   * @return string
   */
  public function next() {
    $this->pointer++;
  }

  /**
   * Summary of rewind
   * @return string
   */
  public function rewind() {
    $this->pointer = 0;
  }

  /**
   * Summary of valid
   * @return bool
   */
  public function valid() {
    // count() indicates how many items are in the list
    return $this->pointer < count($this->items);
  }
}

// A function that uses iterables
/**
 * Summary of printIterable
 * @param iterable $myIterable
 * @return string
 */
function printIterable(iterable $myIterable) {
  foreach($myIterable as $item) {
    echo $item;
  }
}

// Use the iterator as an iterable
$iterator = new MyIterator(["a", "b", "c"]);
echo "<br>";
printIterable($iterator);
?>

</body>
</html>
