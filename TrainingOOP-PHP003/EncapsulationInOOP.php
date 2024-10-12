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

// Class definition
/**
 * Class representing a book.
 */

    class Book {
        public $title;
        public $author;

        /**
         * Book constructor
         * @param string $title The title of the book
         * @param string $author The author of the book
         */
        public function __construct($title, $author) {
            $this->title = $title;
            $this->author = $author;
        }
        /**
         * Get the description of the book
         * @return string Description of the book
         */
        public function getDescription() {
            printf("The book %s is written by %s.\n", $this->title, $this->author);
        }
    }

    // Create object from Book class
    $myBook = new Book("1984", "George Orwell");
    $myBook->getDescription(); // Result: The book 1984 is written by George Orwell

// Variables, arrays of objects
    class Student {
        public $name;
        public $level;

        /**
         * Student constructor
         * @param string $name The name of the student
         * @param string $level The level of the student
         */
        public function __construct($name, $level) {
            $this->name = $name;
            $this->level = $level;
        }

        /**
         * Get information about the student
         * @return string Information about the student
         */
        public function getInfo() {
            printf("Student: %s, level: %s\n", $this->name, $this->level);
        }
    }
    // Create array of objects
    $students = [
        new Student("Nguyen Van A", "A"),
        new Student("Nguyen Van B", "B"),
        new Student("Nguyen Van C", "C")
    ];

    foreach ($students as $student) {
         $student->getInfo() . "\n";
    }
    /*Result : Student: Nguyen Van A, level: A
                Student: Nguyen Van B, level: B
                Student: Nguyen Van C, level: C*/


// Object pointer
    class Author {
        public $name;

        /**
         * Author constructor
         * @param string $name The name of the author
         */
        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            printf("%s\n", $this->name);
        }
    }
    // Create object
    $author1 = new Author("Nguyen Van A");
    // Object pointer
    $authorA = $author1;
    echo $authorA->getName(); // Result: Nguyen Van A

    
// Retrieval range
    class Person {
        public $name = "NguyenVanA";
        protected $age = 20;
        private $sn = "22-12-2022";

        public function showInfo() {
            printf("Name: %s\n", $this->name);
            printf("Age: %d\n", $this->age);
            printf("SN: %s\n", $this->sn);
        }
    }

    $person = new Person();// Create an instance of Person
    $person->showInfo(); // Result: Name: NguyenVanA, Age: 20, SSN: 22-12-2022

// Operator methods


?>