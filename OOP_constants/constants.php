<!DOCTYPE html>
<html>
<body>

<?php
/**
 * A class constant is declared inside a class with the "const" keyword.
 * A constant cannot be changed once it is declared.
 * Class constants are case-sensitive. 
 * However, it is recommended to name the constants in all "uppercase" letters.
 * We can access a constant from "outside" the class by using the class name followed by the scope resolution operator "(::)" followed by the constant name.
 */
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!"."<br />";
}

echo Goodbye::LEAVING_MESSAGE;

// we can access a constant from "inside" the class by using the self keyword followed by the scope resolution operator "(::)" followed by the constant name.
class Goodbye1 {
    const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";

    /**
     * Self
     * @return void
     */
    public function bye() {
        echo self::LEAVING_MESSAGE;
    }
}

$goodbye1 = new Goodbye1();
$goodbye1->bye();
?>
</body>
</html>