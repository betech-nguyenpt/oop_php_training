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
    class Person {
        // Attributes
        private $name;

        // Constructor
        public function __construct($name) {
            $this->name = $name;
            echo "Person object with name '{$this->name}' has been created.<br>";
        }

        // Destructor
        public function __destruct() {
            echo "Person object with name '{$this->name}' has been destroyed.<br>";
        }

        // Method to get the name
        public function getName() {
            return $this->name;
        }
    }

    // Create an object
    $person1 = new Person("John Doe");
    echo "Name: " . $person1->getName() . "<br>";
    // End of script, the object will be automatically destroyed
    // Result
        // Person object with name 'NguyenVanA' has been created.
        // Name: NguyenVanA
        // Person object with name 'NguyenVanA' has been destroyed.


// Access scope to the base class components
    class Example {
        public $value;

        public function __construct($value) {
            $this->value = $value;
        }

        public function display() {
            echo $this->value;
        }
    }

    $example = new Example("Hello, world");
    $example->display(); // Result: Hello, world

    class Example1 {
        public $value;

        public function __construct($value) {
            $this->value = $value;
        }
    }

    class Example2 extends Example1 {
        public function display() {
            echo $this->value;
        }
    }
    // Create an object from Example2 class
    $example = new Example2("Hello, world");
    $example->display(); // Result: Hello, world


// Multilevel inheritance and name collision
    class Person {
        protected $name;
        protected $age;

        // Constructor
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        // Method getInfo
        public function getInfo() {
            return "Name: " . $this->name . ", Age: " . $this->age;
        }
    }

    // Employee class inherits from Person
    class Employee extends Person {
        private $job;

        // Constructor
        public function __construct($name, $age, $job) {
            parent::__construct($name, $age);
            $this->job = $job;
        }

        // Method getInfo
        public function getInfo() {
            return parent::getInfo() . ", Job: " . $this->job;
        }
    }

    // Create an object of Employee class
    $employee = new Employee("NguyenVanA", 25, "Employee");

    // Call the getInfo method
    echo $employee->getInfo();
    // Result: Name: NguyenVanA, Age: 25, Job: Employee


// Virtual base classes

// Abstract base class
    abstract class Person {
        abstract public function introduce();
    }

    // Child class
    class Student extends Person {
        public function introduce() {
            return "Hello, world";
        }
    }

    // Create an object from the child class
    $student = new Student();
    echo $student->introduce(); // Result: Hello, world

// Some examples of constructors and destructors in multilevel inheritance

// Operator overloading in derived classes

    class Number {
        protected $number;

        public function __construct($number) {
            $this->number = $number;
        }

        public function getNumber() {
            return $this->number;
        }
    }

    // Derived class
    class DNumber extends Number {
        public function __construct($number) {
            parent::__construct($number);
        }

        // Addition method
        public function add(DNumber $other) {
            return new DNumber($this->number + $other->getNumber());
        }
    }

    // Using the derived class
    $num1 = new DNumber(11);
    $num2 = new DNumber(12);
    $result = $num1->add($num2);

    echo $result->getNumber(); // Output: 23

// Copy constructor of the derived class

    class Number {
        protected $value;

        public function __construct($value) {
            $this->value = $value;
        }
        public function getValue() {
            return $this->value;
        }
        // Copy method
        public function copy() {
            return clone $this;
        }
    }
    // Derived class
    class DNumber extends Number {
        public function __construct($value) {
            parent::__construct($value);
        }
    }

    // Using the derived class
    $num1 = new DNumber(20);
    $num2 = $num1->copy(); // Copy the object

    echo $num1->getValue(); // Output: 20
    echo $num2->getValue(); // Output: 20

// Program development and enhancement
// Supplement and upgrade the program
// From general to specific
// Whole and part

?>