<!DOCTYPE html>
<html>
<body>

<?php
/**
 * Static properties are declared with the "static" keyword.
 * To access a static property use the class name, double colon (::), and the property name.
 */
class pi {
  /**
   * @var float of the Pi constant
   */
  public static $value = 3.14159;
}

// Get static property
echo pi::$value;
echo "<br>";

/**
 * A class can have both static and non-static properties.
 * A static property can be accessed from a method in the same class using the "self" keyword and double colon (::).
 */
class pii {
    /**
     * @var float of the Pi constant
     */
    public static $value = 3.14159;
    public function staticValue() {
        return self::$value;
    }
}

// Get static property
$pi = new pii();
echo $pi->staticValue();
echo "<br>";

/**
 * To call a static property from a child class, use the "parent" keyword inside the child class.
 */
class pis {
    /**
     * @var float of the Pi constant
     */
    public static $value=3.14159;
}

class x extends pis {
    /**
     * Calling static properties of parent class via keyword "parent"
     * @return float
     */
    public function xStatic() {
        return parent::$value;
    }
}

// Get value of static property directly via child class
echo x::$value;

// Get value of static property via XStatic() method
$x = new x();
echo $x->xStatic();
?>
 
</body>
</html>