<?php
/*
3. Class (Tính đóng gói Encapsulation in OOP)
Định nghĩa lớp
Biến, mảng đối tượng
Con trỏ đối tượng
Đối của phương thức, con trỏ this
Nói thêm về kiểu phương thức và kiểu đối của phương thức
Phạm vi truy xuất
Các phương thức toán tử
*/ 

//Định nghĩa lớp 

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

    // Tạo đối tượng từ lớp Book
    $myBook = new Book("1984", "George Orwell");
    echo $myBook->getDescription(); // Kết quả: The book 1984 is written by George Orwell.

//Biến, mảng đối tượng
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
    // Tạo mảng đối tượng
    $students = [
        new Student("Nguyen Van A", "A"),
        new Student("Nguyen Van B", "B"),
        new Student("Nguyen Van C", "C")
    ];

    foreach ($students as $student) {
        echo $student->getInfo() . "\n";
    }
    /*Kết quả : Student: Nguyen Van A, level: A
                Student: Nguyen Van B, level: B
                Student: Nguyen Van C, level: C*/


//Con trỏ đối tượng
    class Author {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function getName() {
            return $this->name;
        }
    }
    // Tạo đối tượng
    $author1 = new Author("Nguyen Van A");
    // Con trỏ đối tượng
    $authorA = $author1;
    echo $authorA->getName(); // Kết quả: Nguyen Van A


//Đối của phương thức, con trỏ this

//Nói thêm về kiểu phương thức và kiểu đối của phương thức

//Phạm vi truy xuất
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
    $person->showInfo(); // Kết quả: Name: NguyenVanA, Age: 20, SSN: 22-12-2022

//Các phương thức toán tử


?>