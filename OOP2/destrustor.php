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
     * The example below has a __construct() function that is automatically called when you create an object from a class
     * a __destruct() function that is automatically called at the end of the script.
     */
    class Fruit {
        public $name;
        public $color;

        function __construct($name) {
            $this->name = $name;
        }
        function __destruct(){
            echo "The fruit is {$this->name}.";
        }
    }  
    $apple = new Fruit("Apple");
    ?>

    <?php
    class Phone {
        var $name;
        var $color;

        function __construct($name, $color){
            $this->name = $name;
            $this->color = $color;
        }
        function __destruct(){
            echo "<br>";
            echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
    }

    $apple = new Phone("Apple", "red");
    ?>
</body>
</html>