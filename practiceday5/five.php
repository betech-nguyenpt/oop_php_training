<?php
/*
5. Dẫn xuất và thừa kế (Tính kế thừa Inheritance in OOP)


Hàm tạo, hàm huỷ đối với tính thừa kế
Phạm vi truy nhập đến các thành phần của lớp cơ sở
Thừa kế nhiều mức và sự trùng tên
Các lớp cơ sở ảo
Một số ví dụ về hàm tạo, hàm huỷ trong thừa kế nhiều mức
Phân bổ toán tử của lớp dẫn suất
Hàm tạo sao chép của lớp dẫn xuất
Phát triển, hoàn thiện chương trình
Bổ sung, nâng cấp chương trình
Từ khái quát đến cụ thể
Toàn thể và bộ phận
*/ 

//Sự dẫn xuất và tính thừa kế
// Hàm tạo, hàm huỷ đối với tính thừa kế

    class Person {
        // Thuộc tính
        private $name;

        // Hàm tạo (constructor)
        public function __construct($name) {
            $this->name = $name;
            echo "Đối tượng Person với tên '{$this->name}' đã được tạo.<br>";
        }

        // Hàm hủy (destructor)
        public function __destruct() {
            echo "Đối tượng Person với tên '{$this->name}' đã được hủy.<br>";
        }

        // Phương thức để lấy tên
        public function getName() {
            return $this->name;
        }
    }

    // Tạo đối tượng
    $person1 = new Person("John Doe");
    echo "Tên: " . $person1->getName() . "<br>";
    // Kết thúc script, đối tượng sẽ tự động bị hủy
    //Kết quả
        //Đối tượng Person với tên 'NguyenVanA' đã được tạo.
        //Tên: NguyenVanA
        //Đối tượng Person với tên 'NguyenVanA' đã được hủy.


// Phạm vi truy nhập đến các thành phần của lớp cơ sở
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
    $example->display(); // Kết quả: Hello, world

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
    // Tạo đối tượng từ lớp Example2
    $example = new Example2("Hello, world");
    $example->display(); // Kết quả: Hello, world


// Thừa kế nhiều mức và sự trùng tên
    class Person {
        protected $name;
        protected $age;

        // Hàm tạo
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        // Phương thức getInfo
        public function getInfo() {
            return "Name: " . $this->name . ", Age: " . $this->age;
        }
    }

    // Lớp  Employee thừa kế từ Person
    class Employee extends Person {
        private $job;

        // Hàm tạo
        public function __construct($name, $age, $job) {
            parent::__construct($name, $age);
            $this->job = $job;
        }

        // Phương thức getInfo
        public function getInfo() {
            return parent::getInfo() . ", Job : " . $this->job;
        }
    }

    // Tạo đối tượng của lớp Employee
    $employee = new Employee("NguyenVanA", 25, "Employee");

    // Gọi phương thức getInfo
    echo $employee->getInfo();
        //Kết quả: Name: NguyenVanA, Age: 25, Job : Employee


// Các lớp cơ sở ảo
    // Lớp sơ sở ảo
        abstract class Person {
            abstract public function introduce();
        }

        // Lớp con
        class Student extends Person {
            public function introduce() {
                return "Hello, world";
            }
        }

        // Tạo đối tượng từ lớp con
        $student = new Student();
        echo $student->introduce(); // Kết quả: Hello, world

// Một số ví dụ về hàm tạo, hàm huỷ trong thừa kế nhiều mức

// phân bổ toán tử của lớp dẫn suất

    class Number {
        protected $number;

        public function __construct($number) {
            $this->number = $number;
        }

        public function getNumber() {
            return $this->number;
        }
    }

    // Lớp dẫn xuất
    class DNumber extends Number {
        public function __construct($number) {
            parent::__construct($number);
        }

        // Phương thức cộng
        public function add(DNumber $other) {
            return new DNumber($this->number + $other->getNumber());
        }
    }

    // Sử dụng lớp dẫn xuất
    $num1 = new DNumber(11);
    $num2 = new DNumber(12);
    $result = $num1->add($num2);

    echo $result->getNumber(); // Output: 23

// Hàm tạo bản sao của lớp dẫn xuất

    class Number {
        protected $value;

        public function __construct($value) {
            $this->value = $value;
        }
        public function getValue() {
            return $this->value;
        }
        // Phương thức sao chép
        public function copy() {
            return clone $this;
        }
    }
    // Lớp dẫn xuất
    class DNumber extends Number {
        public function __construct($value) {
            parent::__construct($value);
        }
    }

    // Sử dụng lớp dẫn xuất
    $num1 = new DNumber(20);
    $num2 = $num1->copy(); // Sao chép đối tượng

    echo $num1->getValue(); // Output: 20
    echo $num2->getValue(); // Output: 20
    
// Phát triển, hoàn thiện chương trình
// Bổ sung, nâng cấp chương trình
// Từ khái quát đến cụ thể
// Toàn thể và bộ phận

?>