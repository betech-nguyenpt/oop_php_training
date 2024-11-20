<!DOCTYPE html>
<html>
<body>

<?php
/**
 * Interfaces are declared with the "interface" keyword.
 * To implement an interface, a class must use the "implements" keyword.
 * A class that implements an interface must implement all of the interface's methods.
 */
interface Animal {
  /**
   * Summary of makeSound
   * @return string
   */
  public function makeSound();
}

class Cat implements Animal {
  /**
   * implementation of makeSound
   * @return string
   */
  public function makeSound() {
    echo "Meow";
  }
}

$animal = new Cat();
$animal->makeSound();
echo "<br>";

// Interface definition
interface Animals {
    /**
     * Summary of makeSound
     * @return string
     */
    public function makeSound();
  }
  
  // Class definitions
  class Catt implements Animals {
    public function makeSound() {
      echo " Meow ";
    }
  }
  
  class Dog implements Animals {
    public function makeSound() {
      echo " Bark ";
    }
  }
  
  class Mouse implements Animals {
    public function makeSound() {
      echo " Squeak ";
    }
  }
  
  // Create a list of animals
  $cat = new Cat();
  $dog = new Dog();
  $mouse = new Mouse();
  $animalss = array($cat, $dog, $mouse);
  
  // Tell the animals to make a sound
  foreach($animalss as $animals) {
    $animals->makeSound();
  }
?>
 
</body>
</html>
