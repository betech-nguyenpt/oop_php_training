<!DOCTYPE html>
<html>
    <body>
        <?php
        /**
         * In the example below
         * $apple and $banana are instances of the class Fruit.
         */
        class Fruit {
            public $name;
            public $color;

            function set_name($name) {
                $this->name = $name;
            }
            function get_name(){
                return $this->name;
            }
        }
        $apple = new Fruit();
        $banana = new Fruit();
        $apple->set_name("Apple");
        $banana->set_name("Banana");

        echo $apple->get_name();
        echo "<br/>";
        echo $banana->get_name()."<br/>";
        /**
         * In the example below, 
         * we add two more methods to class Fruit, 
         * for setting and getting the $color property.
         */
        class Food {
            // Properties
            public $name;
            public $color;
          
            // Methods
            function set_name($name) {
              $this->name = $name;
            }
            function get_name() {
              return $this->name;
            }
            function set_color($color) {
              $this->color = $color;
            }
            function get_color() {
              return $this->color;
            }
        }
          
        $apple = new Food();
        $apple->set_name('Apple');
        $apple->set_color('Red');
        echo "Name: " . $apple->get_name();
        echo "<br>";
        echo "Color: " .  $apple->get_color()."<br>";
        /**
         * So, where can we change the value of the $name property? There are two ways:
         * 1. Inside the class (by adding a set_name() method and use $this):
         */
        class Phone {
            public $name;
            function set_name($name) {
              $this->name = $name;
            }
          }
          $apple = new Phone();
          $apple->set_name("Apple");
          
          echo $apple->name;  
          echo "<br>";
        //2. Outside the class (by directly changing the property value):
        class Phone1 {
            public $name;
          }
          $apple = new Phone1();
          $apple->name = "Apple";
          
          echo $apple->name;
          echo "<br>";
        //You can use the instanceof keyword to check if an object belongs to a specific class.
        class Fruit1 {
            // Properties
            public $name;
            public $color;
          
            // Methods
            function set_name($name) {
              $this->name = $name;
            }
            function get_name() {
              return $this->name;
            }
          }
          
          $apple = new Fruit1();
          var_dump($apple instanceof Fruit);
        ?>
  
    </body>
</html>