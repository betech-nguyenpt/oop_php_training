<?php
/*
5. Derivation and Inheritance (Inheritance in OOP)


Constructor and destructor for inheritance
Scope of access to base class members
Multi-level inheritance and duplicate names
virtual base classes
Some examples of constructors and destructors in multi-level inheritance
Allocating operators of derived classes
Copy constructor of derived class
Develop and perfect the program
Supplement and upgrade the program
From general to specific
Whole and parts
*/ 


// Constructor and destructor for inheritance

    class Person {
     
        private $name;

        // constructor
        public function __construct($name) {
            $this->name = $name;
            echo "Đối tượng Person với tên '{$this->name}' đã được tạo.<br>";
        }

        // destructor
        public function __destruct() {
            echo "Đối tượng Person với tên '{$this->name}' đã được hủy.<br>";
        }

        // Method to get name
        public function getName() {
            return $this->name;
        }
    }

    // Tạo đối tượng
    $person1 = new Person("John Doe");
    echo "Name: " . $person1->getName() . "<br>";
    // 
Result
        //Đối tượng Person với tên 'NguyenVanA' đã được tạo.
        //Name: NguyenVanA
        //Đối tượng Person với tên 'NguyenVanA' đã được hủy.


// Scope of access to base class members
    class Example {
        public $value;

        public function __construct($value) {
            $this->value = $value;
        }

        public function display() {
            echo $this->value;
        object

    echo $num1->getValue(); // Output: 20
    echo $num2->getValue(); // Output: 20
    
// Develop and perfect the program
// Supplement and upgrade the program
// From general to specific
// Whole and parts

?>
