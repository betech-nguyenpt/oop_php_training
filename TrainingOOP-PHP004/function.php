<?php
/*
Constructor
The class has no constructor and default constructor
Copy constructor
Destructor
Assignment operator
Constructor and component object
Static components
Object array
Memory allocation for objects
*/

// Constructor
    class Person {
        public $name; // Name of the person
        public $age;  // Age of the person

        /**
         * Constructor to initialize the Person object
         * @param string $name Name of the person
         * @param int $age Age of the person
         */
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        // Method to display information
        public function Info() {
            printf("Name: %s, Age: %d\n", $this->name, $this->age);
        }
    }

    // Create an object and pass parameters to the constructor
    $person1 = new Person("NguyenVanA", 25);
    $person1->Info();  // Output: Name: NguyenVanA, Age: 25


// The class has no constructor and default constructor
        class Person {
            public $name; // Name of the person
            public $age;  // Age of the person

            // Method to display information
            public function Info() {
                printf("Name: %s, Age: %d\n", $this->name, $this->age);
            }
        }

        // Create an object
        $person1 = new Person();
        // Assign value to attributes
        $person1->name = "NguyenVanA";
        $person1->age = 25;
        // Display information
        $person1->Info();  // Output: Name: NguyenVanA, Age: 25

// Copy constructor
        class Person {
            public $name; // Name of the person
            public $age;  // Age of the person

            /**
             * Constructor to initialize the Person object
             * @param string $name Name of the person
             * @param int $age Age of the person
             */
            public function __construct($name, $age) {
                $this->name = $name;
                $this->age = $age;
            }

            // Copy method to create a copy of the object
            public function copy() {
                return new self($this->name, $this->age); // Create a new object with the same values
            }
        }

        // Create the initial object
        $person1 = new Person("Alice", 25);

        // Copy the object
        $person2 = $person1->copy();

        // Display information
        printf("Original Person: %s, %d\n", $person1->name, $person1->age);  // Output: Original Person: Alice, 25
        printf("Copied Person: %s, %d\n", $person2->name, $person2->age);     // Output: Copied Person: Alice, 25

// Destructor
        class demo {
            public function __construct() {
                printf("Constructor...\n"); // Called when object is created
            }
        }

        class demo1 extends demo {
            public function __construct() {
                parent::__construct(); // Call parent constructor
                printf("Constructor 2...\n"); // Additional actions
            }

            public function __destruct() {
                printf("Destroying...\n"); // Actions when object is destroyed
            }
        }

        $obj = new demo1();  // Result: Constructor...Constructor 2...Destroying...

        // Assignment operator
        $number = 5;  // Assign value 5 to variable $number
        printf("%d\n", $number); // Print the value of variable number: 5

        $number += 3; // Assign a new value to $number by adding 3 to the current value of $number
        printf("%d\n", $number); // Print the value of variable number: 8

// Static components
        class Math {
            public static $pi = 3.14; // Static property

            public static function getPi() {
                return self::$pi; // Return static property
            }
        }

        // Access static properties from outside the class
        printf("%.2f\n", Math::$pi); // Output: 3.14
        printf("%.2f\n", Math::getPi()); // Output: 3.14

// Object array
        class Person {
            public $name; // Name of the person

            public function __construct($name) {
                $this->name = $name;
            }

            public function greet() {
                printf("Hello, my name is %s\n", $this->name);
            }
        }

        // Create an array to store Person objects
        $people = [];

        // Add Person objects to the array
        $people[] = new Person("A");
        $people[] = new Person("B");

        // Iterate through the array and call the greet() method for each object
        foreach ($people as $person) {
            $person->greet(); // Result: Hello, my name is A; Hello, my name is B
        }

// Allocate memory for the object
        class SimpleClass {
            public $property; // Property of the object

            public function __construct($value) {
                $this->property = $value; // Initialize property
            }

            public function display() {
                printf("Property value: %s\n", $this->property);
            }
        }

        // Allocate memory for the object
        $object = new SimpleClass("Hello, World!");

        // Use the object
        $object->display(); // Result: Property value: Hello, World!

?>
