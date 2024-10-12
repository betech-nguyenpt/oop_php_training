<?php
/*
Write comments
Variable declaration
Coercion operator
Hang has style
Data type
Function - Reference variable
Function - Pass value to function by reference
Function - Function returns references
Function - Argument has a default value
Function - Overloading functions
Function - Defines a stack of operators
*/

// Variable declaration 
        $name = "John Doe"; // string variable
        $age = 30; // Variable of type integer
        $height = 5.9; // Real number variable
        $isActive = true; // Boolean variable
        $colors = ["red", "green", "blue"]; // Array variable
        $arrX = [1, 2, 3, 4, 5];

// Class definition for Person
        class Person { // object variable
            public $firstName;
            public $lastName;
        }

// Coercion operator:

        $string = "123";
        $integer = (int) $string; // Cast from string to integer
        printf("%d\n", $integer); // Result: 123

        $string = "45.67";
        $float = (float) $string; // Cast from string to real number
        printf("%.2f\n", $float); // Result: 45.67

        $integer = 100;
        $string = (string) $integer; // Cast from integer to string
        printf("%s\n", $string); // Result: "100"

        $float = 3.14;
        $string = (string) $float; // Cast from real number to string
        printf("%s\n", $string); // Result: "3.14"

        // Data type
        // String Type
        $string = "Hello, World!";
        printf("%s\n", $string); // Result: Hello, World!

        // Integer Type
        $integer = 42;
        printf("%d\n", $integer); // Result: 42

        // Float Type
        $float = 3.14159;
        printf("%.5f\n", $float); // Result: 3.14159

        // Boolean Type
        $booleanTrue = true;
        $booleanFalse = false;
        printf("%s\n", $booleanTrue ? 'True' : 'False'); // Result: True



// Function - Pass value to function by reference
        function tangGT(&$value) {
            $value += 10; // Increase the variable value by 10
        }

        $num = 5;

        // Print the value before calling the function
        printf("Before: %d\n", $num); // Result: Before: 5

        // Call the function and pass the variable by reference
        tangGT($num);

        // Print the value after calling the function
        printf("After: %d\n", $num); // Result: After: 15



// Function - Argument has a default value

        function GT($name = "Anh") {
            printf("Hello, %s!\n", $name);
        }

        // Call the function without passing an argument
        GT(); // Result: Hello, Anh!

        // Call the function with a specific argument
        GT("Alice"); // Result: Hello, Alice!



// Function - Overloading functions
        class Number {
            public $value;

            // Constructor
            public function __construct($value) {
                $this->value = $value;
            }

            // Define the addition operator
            public function __add($other) {
                return new Number($this->value + $other->value);
            }

            // Convert the object to a string for display
            public function __toString() {
                return (string) $this->value;
            }
        }

        // Create Number objects
        $num1 = new Number(10);
        $num2 = new Number(5);

        // Use the addition operator
        $sum = $num1->__add($num2);
        printf("Sum: %s\n", $sum); // Result: Sum: 15

?>
