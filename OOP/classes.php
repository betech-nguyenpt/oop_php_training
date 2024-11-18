<!DOCTYPE html>
<html>
    <body>
        <?php

        /**
         * In the example below
         * $apple and $banana are instances of the class Fruit.
         */
        class Fruit11 {
            public $name;
            public $color;

            /**
             * Set name
             * @param string $name The name to set
             */
            function set_name($name) {
                $this->name = $name;
            }

			/**
			 * Get name
			 * @return string The name of get the object
			 */
            function get_name() {
                return $this->name;
            }
        }
        $apple = new Fruit11();
        $banana = new Fruit11();
        $apple->set_name("Apple"); 		//Print out "Apple"
        $banana->set_name("Banana"); 	//Print out "Banana"

        echo $apple->get_name();
        echo "<br/>";
        echo $banana->get_name()."<br/>"; //Print out "Banana"

        /**
         * In the example below, 
         * we add two more methods to class Fruit, 
         * for setting and getting the $color property.
         */
        class Food {
            // Properties
            public $name;
            public $color;
          
			/**
			 * Set name
			 * @param string $name the name to set
			 */
            function set_name($name) { 
              $this->name = $name;
            }

			/**
			 * Get name
			 * @return string
			 */
            function get_name() {
              return $this->name;
            }

			/**
			 * Set color
			 * @param string $color the color to set
			 */
            function set_color($color) {
              $this->color = $color;
            }

			/**
			 * Get color
			 * @return string 
			 */
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
        class Phone11 {
            public $name;

			/**
			 * Set name
			 * @param string $name the name to set
			 */
            function set_name($name) {
              $this->name = $name;
            }
          }

          $apple = new Phone11();
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
        class Fruit10 {
            // Properties
            public $name;
            public $color;
          
			/**
			 * Set name
			 * @param string $name the name to set
			 */
            function set_name($name) {
              $this->name = $name;
            }

			/**
			 * Get name
			 * @return string
			 */
            function get_name() {
              return $this->name;
            }
        }
          
          $apple = new Fruit10();
          var_dump($apple instanceof Fruit10);
        ?>
    </body>
</html>