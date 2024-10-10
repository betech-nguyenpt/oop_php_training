<?php
/*
3. Class (Encapsulation in OOP)
Class definition
Variables, arrays of objects
Object pointer
The method's argument, this pointer
Tell more about method types and method argument types
Retrieval range
Operator methods
*/ 

//Class definition

    class Book {
        public $title;
        public $author;

        public function __construct($title, $author) {
            $this->title = $title;
            $this->author = $author;
        }

        public function getDescription() {
            return "The book {$this->title} is written by {$this->author}.";
        }
    }

    // Create object from Book class
    $myBook = new Book("1984", "George Orwell");
    echo $myBook->getDescription(); // Result: The book 1984 is written by George Orwell.

//Variables, arrays of objects
    class Student {
        public $name;
        public $level;

        public function __construct($name, $level) {
            $this->name = $name;
            $this->level = $level;
        }

        public function getInfo() {
            return "Student: $this->name, level: $this->level";
        }
    }
    // Create array of objects
    $students = [
        new Student("Nguyen Van A", "A"),
        new Student("Nguyen Van B", "B"),
        new Student("Nguyen Van C", "C")
    ];

    foreach ($students as $student) {
        echo $student->getInfo() . "\n";
    }
    /*Result : Student: Nguyen Van A, level: A
                Student: Nguyen Van B, level: B
                Student: Nguyen Van C, level: C*/


//Object pointer
    class Author {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }
    // create object
    $author1 = new Author("Nguyen Van A");
    // Object pointer
    $authorA = $author1;
    echo $authorA->getName(); // Result: Nguyen Van A


//The method's argument, this pointer

//Tell more about method types and method argument types

//Retrieval range
    class Person {
        public $name = "NguyenVanA";
        protected $age = 20;
        private $sn = "22-12-2022";

        public function showInfo() {
            echo "Name: " . $this->name . "\n";
            echo "Age: " . $this->age . "\n";
            echo "SN: " . $this->sn . "\n";
        }
    }

    $person = new Person();
    $person->showInfo(); // Result: Name: NguyenVanA, Age: 20, SSN: 22-12-2022

//Operator methods


?>