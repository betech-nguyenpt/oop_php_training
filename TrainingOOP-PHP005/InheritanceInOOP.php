<?php
/*
5. Inheritance and Polymorphism (Inheritance in OOP)
Constructor and destructor concerning inheritance
Access scope to the base class components
Multilevel inheritance and name collision
Virtual base classes
Some examples of constructors and destructors in multilevel inheritance
Operator overloading in derived classes
Copy constructor of the derived class
Program development and enhancement
Supplement and upgrade the program
From general to specific
Whole and part
*/

// Constructor and destructor concerning inheritance

        /**
         * Class representing a person.
         */
        class Person {
            // Attributes
            private $name;

            /**
             * Person constructor.
             * @param string $name Name of the person.
             */
            public function __construct($name) {
                $this->name = $name;
                printf("Person object with name '%s' has been created.<br>", $this->name);
            }

            /**
             * Destructor for the person class.
             */
            public function __destruct() {
                printf("Person object with name '%s' has been destroyed.<br>", $this->name);
            }

            /**
             * Get the name of the person.
             * @return string The name of the person.
             */
            public function getName() {
                return $this->name;
            }
        }

        // Create an object
        $person1 = new Person("John Doe");
        printf("Name: %s<br>", $person1->getName());
        // End of script, the object will be automatically destroyed
        // Result:
        // Person object with name 'John Doe' has been created.
        // Name: John Doe
        // Person object with name 'John Doe' has been destroyed.


// Access scope to the base class components

        /**
         * Class Example demonstrating basic functionality.
         */
        class Example {
            public $value;

            /**
             * Example constructor.
             * @param string $value Initial value.
             */
            public function __construct($value) {
                $this->value = $value;
            }

            /**
             * Display the value.
             */
            public function display() {
                printf("%s", $this->value);
            }
        }

        $example = new Example("Hello, world");
        $example->display(); // Result: Hello, world

        /**
         * Class Example1 serving as a base class.
         */
        class Example1 {
            public $value;

            /**
             * Example1 constructor.
             * @param string $value Initial value.
             */
            public function __construct($value) {
                $this->value = $value;
            }
        }

        /**
         * Class Example2 extending Example1.
         */
        class Example2 extends Example1 {
            /**
             * Display the value from the Example1 class.
             */
            public function display() {
                printf("%s", $this->value);
            }
        }

        // Create an object from Example2 class
        $example = new Example2("Hello, world");
        $example->display(); // Result: Hello, world


// Multilevel inheritance and name collision

        /**
         * Class Person with additional attributes.
         */
        class Person {
            protected $name;
            protected $age;

            /**
             * Person constructor.
             * @param string $name Name of the person.
             * @param int $age Age of the person.
             */
            public function __construct($name, $age) {
                $this->name = $name;
                $this->age = $age;
            }

            /**
             * Get information about the person.
             * @return string Information string.
             */
            public function getInfo() {
                return sprintf("Name: %s, Age: %d", $this->name, $this->age);
            }
        }

        /**
         * Class Employee extending Person.
         */
        class Employee extends Person {
            private $job;

            /**
             * Employee constructor.
             *
             * @param string $name Name of the person
             * @param int $age Age of the person
             * @param string $job Job title
             */
            public function __construct($name, $age, $job) {
                parent::__construct($name, $age);
                $this->job = $job;
            }

            /**
             * Get information about the employee
             * @return string Information string
             */
            public function getInfo() {
                return sprintf("%s, Job: %s", parent::getInfo(), $this->job);
            }
        }

        // Create an object of Employee class
        $employee = new Employee("NguyenVanA", 25, "Employee");

        // Call the getInfo method
        printf("%s", $employee->getInfo()); // Result: Name: NguyenVanA, Age: 25, Job: Employee


// Virtual base classes

        /**
         * Abstract base class for Person
         */
        abstract class Person {
            abstract public function introduce();
        }

        /**
         * Class Student extending Person
         */
        class Student extends Person {
            /**
             * Introduce the student.
             * @return string Introduction string
             */
            public function introduce() {
                return "Hello, world";
            }
        }

        // Create an object from the child class
        $student = new Student();
        printf("%s", $student->introduce()); // Result: Hello, world


// Some examples of constructors and destructors in multilevel inheritance

// Operator overloading in derived classes

        /**
         * Class Number representing a numeric value.
         */
        class Number {
            protected $number;

            /**
             * Number constructor
             * @param int $number Initial number
             */
            public function __construct($number) {
                $this->number = $number;
            }

            /**
             * Get the number
             * @return int The number
             */
            public function getNumber() {
                return $this->number;
            }
        }

        /**
         * Class DNumber extending Number for derived number operations.
         */
        class DNumber extends Number {
            /**
             * DNumber constructor.
             * @param int $number Initial number.
             */
            public function __construct($number) {
                parent::__construct($number);
            }

            /**
             * Add another DNumber to this one.
             * @param DNumber $other Another DNumber instance.
             * @return DNumber Result of the addition.
             */
            public function add(DNumber $other) {
                return new DNumber($this->number + $other->getNumber());
            }
        }

        // Using the derived class
        $num1 = new DNumber(11);
        $num2 = new DNumber(12);
        $result = $num1->add($num2);

        printf("%d", $result->getNumber()); // Output: 23


// Copy constructor of the derived class

        /**
         * Class Number representing a numeric value.
         */
        class Number {
            protected $value;

            /**
             * Number constructor.
             * @param int $value Initial value.
             */
            public function __construct($value) {
                $this->value = $value;
            }

            /**
             * Get the value.
             * @return int The value.
             */
            public function getValue() {
                return $this->value;
            }

            /**
             * Copy method to clone the object.
             * @return Number Cloned object.
             */
            public function copy() {
                return clone $this;
            }
        }

        /**
         * Class DNumber extending Number.
         */
        class DNumber extends Number {
            /**
             * DNumber constructor.
             * @param int $value Initial value.
             */
            public function __construct($value) {
                parent::__construct($value);
            }
        }

        // Using the derived class
        $num1 = new DNumber(20);
        $num2 = $num1->copy(); // Copy the object

        printf("%d", $num1->getValue()); // Output: 20
        printf("%d", $num2->getValue()); // Output: 20

// Program development and enhancement
// Supplement and upgrade the program
// From general to specific
// Whole and part

?>