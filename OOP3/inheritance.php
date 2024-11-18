<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * Inheritance in OOP = When a class derives from another class.
     * The child class will inherit all the public and protected properties and methods from the parent class. In addition, it can have its own properties and methods.
     * An inherited class is defined by using the extends keyword.
     * public - the property or method can be accessed from everywhere. This is default 
     */
    class Fruit {
        public $name;
        public $color;
        public function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        public function intro(){
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }

    class Strawberry extends Fruit {
        public function message(){
            echo "Am I a fruit or a berry?";
        }
    }

    $strawberry = new Strawberry("Strawberry", "red");
    $strawberry->message();
    $strawberry->intro();
    ?>
    <?php
    //protected - the property or method can be accessed within the class and by classes derived from that class
    class Fruit1 {
        public $name;
        public $color;
        public function __construct($name, $color) {
          $this->name = $name;
          $this->color = $color; 
        }
        protected function intro() {
          echo "The fruit is {$this->name} and the color is {$this->color}."; 
        }
      }
      
    class Strawberry0 extends Fruit1 {
        public function message() {
            echo "<br>";
          echo "Am I a fruit or a berry? "; 
        }
      }
      
    $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
    $strawberry->message(); 
    $strawberry->intro();
    ?>
    <?php
    class Fruit2 {
        public $name;
        public $color;
        public function __construct($name, $color) {
          $this->name = $name;
          $this->color = $color; 
        }
        protected function intro() {
          echo "The fruit is {$this->name} and the color is {$this->color}."; 
        }
      }
      
    class Strawberry2 extends Fruit2 {
        public function message() {
          echo "Am I a fruit or a berry? ";
          $this -> intro();
        }
      }
    $strawberry = new Strawberry("Strawberry", "red");
    $strawberry->message();
    ?>
    <?php
    /**
     * Inherited methods can be overridden by redefining the methods (use the same name) in the child class.
     * Look at the example below. The __construct() and intro() methods in the child class (Strawberry) will override the __construct() and intro() methods in the parent class (Fruit).
     */
    class Fruit3 {
        public $name;
        public $color;
        public function __construct($name, $color) {
          $this->name = $name;
          $this->color = $color; 
        }
        public function intro() {
          echo "The fruit is {$this->name} and the color is {$this->color}."; 
        }
      }
      
    class Strawberry3 extends Fruit3 {
        public $weight;
        public function __construct($name, $color, $weight) {
          $this->name = $name;
          $this->color = $color;
          $this->weight = $weight; 
        }
        public function intro() {
          echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram."; 
        }
      }
      
    $strawberry = new Strawberry("Strawberry", "red", 50);
    $strawberry->intro();
    // The final keyword can be used to prevent class inheritance or to prevent method overriding.
    /**
    final class Fruit4 {
    }
    
    class Strawberry4 extends Fruit4 {
    }
    // The following example shows how to prevent method overriding.
    class Fruit5 {
        final public function intro() {
        }
      }
      
      class Strawberry5 extends Fruit5 {
        // will result in error
        public function intro() {
        }
      }
        */
    ?>
</body>
</html>