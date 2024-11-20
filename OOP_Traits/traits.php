<!DOCTYPE html>
<html>
<body>

<?php
trait message1 {
  /**
   * Outputs "OOP is fun!"
   * @return string
   */
  public function msg1() {
    echo "OOP is fun! "; 
    echo "<br>";
  }
}

class Welcome {
  use message1;
}

// Create object and call method
$obj = new Welcome();
$obj->msg1();

trait message2 {
    /**
     * Outputs "OOP is hot!"
     * @return string
     */
    public function msg2() {
      echo "OOP is hot! "; 
    }
  }
  
  trait message3 {
    /**
     * Outputs "OOP reduces code duplication!"
     * @return string
     */
    public function msg3() {
      echo "OOP reduces code duplication!"; 
    }
  }
  
  class Welcome1 {
    use message2;
  }
  
  class Welcome2 {
    use message2, message3;
  }
  
  // Create object and call method
  $obj = new Welcome1();
  $obj->msg2();
  echo "<br>";
  
  
  $obj2 = new Welcome2();
  $obj2->msg2();
  $obj2->msg3();
?>
 
</body>
</html>
