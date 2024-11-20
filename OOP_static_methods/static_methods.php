<!DOCTYPE html>
<html>
<body>

<?php
// To access a static method use the class name, double colon (::), and the method name.
class greeting {
  /**
   * Outputs "Hello World!"
   * @return string
   */
  public static function welcome() {
    echo "Hello World!";
    echo "<br>";
  }
}

// Call static method
greeting::welcome();

/**
 * A class can have both static and non-static methods
 * A static method can be accessed from a method in the same class using the self keyword and double colon (::).
 */
class greetings {
    /**
   * Outputs "Hello World!"
   * @return string
   */
    public static function welcome() {
      echo "Hello World!";
      echo "<br>";
    }
    /**
     * Constructor calls the static method "welcome"
     */
    public function __construct() {
      self::welcome();
    }
  }
  
  new greetings();

  /**
   * Static methods can also be called from methods in other classes.
   * To do this, the static method should be public.
   */
  class A {
    /**
     * Outputs "Hello World!"
     * @return string
     */
    public static function welcome() {
      echo "Hello World!";
      echo "<br>";
    }
  }
  
  class B {
    /**
     * Calls static method "welcome" from class "A"
     * @return string
     */
    public function message() {
      A::welcome();
    }
  }
  
  $obj = new B();
  echo $obj -> message();

  /**
   * To call a static method from a child class, use the "parent" keyword inside the child class.
   * Here, the static method can be "public" or "protected".
   */
  class domain {
    /**
     * Summary of getWebsiteName
     * @return string
     */
    protected static function getWebsiteName() {
      return "W3Schools.com";
    }
  }
  
  class domainW3 extends domain {
    public $websiteName;
    /**
     * Constructor calls the parent static method "getWebsiteName"
     */
    public function __construct() {
      $this -> websiteName = parent::getWebsiteName();
    }	
  }
  
  $domainW3 = new domainW3;
  echo $domainW3 -> websiteName;
?>
 
</body>
</html>
