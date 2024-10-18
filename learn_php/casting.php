<!DOCTYPE html>
<html>
    <body>
        <?php 
        /*To cast to string, use the (string) statement:*/ 
        $x = 1502;
        $y = "15.02";
        $d = "Hello";
        $a = true;
        $b = NULL;
        $x = (string) $x;
        $y =(string) $y;
        $d = (string) $d;
        $a = (string) $a;
        $b = (string) $b;
        var_dump($x);
        var_dump($y);
        var_dump($d);
        var_dump($a);
        var_dump($b);
        echo "<br>";
        /*To cast to integer, use the (int) statement:*/
        $x = (int) $x;
        $y = (int) $y;
        $d = (int) $d;
        $a = (int) $a;
        $b = (int) $b;
        var_dump($x);
        var_dump($y);
        var_dump($d);
        var_dump($a);
        var_dump($b);
        echo"<br/>";
        /*To cast to float, use the (float) statement:*/
        $o = "15 Tan";
        $i = "Tan 15";
        $x = (float) $x;
        $o = (float) $o;
        $i = (float) $i;
        $a = (float) $a;
        $b = (float) $b;
        var_dump($x);
        var_dump($o);
        var_dump($i);
        var_dump($a);
        var_dump($b);
        echo"<br/>";
        /*To cast to boolean, use the (bool) statement:*/
        $e = 1233;
        $f = "true";
        $z = "false";
        $a = (bool) $a;
        $b = (bool) $b;
        $d = (bool) $d;
        $e = (bool) $e;
        $f = (bool) $f;
        $x = (bool) $x;
        $y = (bool) $y;
        $z = (bool) $z;
        $o = (bool) $o;
        $i = (bool) $i;
        var_dump($a);
        var_dump($b);
        var_dump($d);
        var_dump($e);
        var_dump($f);
        var_dump($x);
        var_dump($y);
        var_dump($z);
        var_dump($o);
        var_dump($i);
        echo"<br/>";
        ?>
        </pre>
        <pre>
            <?php
            /*To cast to array, use the (array) statement:*/
            $h = "Hello World";
            $h = (array) $h;
            var_dump($h);
            $j = 20;
            $l = "3.14";
            $u = true;
            $s = NULL;
            $j = (array) $j;
            $i = (array) $i;
            $u = (array) $u;
            $s = (array) $s;
            var_dump ($j);
            var_dump($i);
            var_dump($u);
            var_dump($s);
            echo "<br>";
        /*Objects converts into associative arrays where the property names becomes the keys and the property values becomes the values:*/
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
              $myCar = (array) $myCar;
              var_dump($myCar);
              echo"<br>";
        /*To cast to object, use the (object) statement:*/
              $h = (object) $h;
              $j = (object) $j;
              $i = (object) $i;
              $u = (object) $u;
              $s = (object) $s;
              var_dump($h);
              var_dump($j);
              var_dump($i);
              var_dump($u);
              var_dump($s);
              echo "<br>";
              /*When converting into objects, most data types converts into a object with one property, named "scalar", with the corresponding value.*/
            $k = array("Volvo", "BMW", "Toyota"); 
        $l = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 
        $k = (object) $k;
        $l = (object) $l;
        var_dump($l);
        var_dump($k);
        echo"<br>";
        ?>
    </body>
</html>