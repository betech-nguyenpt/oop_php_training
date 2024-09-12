<?php
/*
Hàm tạo (Constructor)
Lớp không có hàm tạo và hàm tạo mặc định
Hàm tạo sao chép (copy constructor)
Hàm huỷ (Destructor)
Toán tử gán
Hàm tạo và đối tượng thành phần
Các thành phần tĩnh
Mảng đối tượng
Cấp phát bộ nhớ cho đối tượng*/

// Hàm tạo (Constructor)

    class Person {
        public $name;
        public $age;

        // Hàm tạo
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        // Phương thức hiển thị thông tin
        public function Info() {
            echo "Name: " . $this->name . ", Age: " . $this->age;
        }
    }

    // Tạo đối tượng và truyền tham số cho hàm tạo
    $person1 = new Person("NguyenVanA", 25);
    $person1->Info();  // Output: Name: NguyenVanA, Age: 25

// Lớp không có hàm tạo và hàm tạo mặc định
    
    class Person {
        public $name;
        public $age;
        // Phương thức hiển thị thông tin
        public function Info() {
            echo "Name: " . $this->name . ", Age: " . $this->age;
        }
    }
    //Tạo đối tượng
    $person1 = new Person();
    //Gán giá trị cho thuộc tính
    $person1 -> name = "NguyenVanA";
    $person1 ->age="25";
    //Hiển thị thông tin
    $person1->Info();  // Output: Name: NguyenVanA, Age: 25


// Hàm tạo sao chép (copy constructor)'
    class Person {
        public $name;
        public $age;

        // Hàm tạo
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        // Hàm copy thủ công
        public function copy() {
            return new self($this->name, $this->age); // Tạo đối tượng mới với cùng giá trị
        }
    }

    // Tạo đối tượng ban đầu
    $person1 = new Person("Alice", 25);

    // Sao chép đối tượng thủ công
    $person2 = $person1->copy();

    // Hiển thị thông tin
    echo "Nhân sự ban đầu: " . $person1->name . ", " . $person1->age . "\n";  // Output: Original Person: NguyenVanA, 25
    echo "Nhân sự copy: " . $person2->name . ", " . $person2->age . "\n";    // Output: Copied Person: NguyenVanA, 25
// Hàm huỷ (Destructor)
class demo  
{  
    public function demo()  
    {  
        echo "constructor1...";  
    }  
}  
  
class demo1 extends demo  
{  
    public function __construct()  
    {  
        echo parent::demo();  
        echo "constructor2...";  
    }  
    public function __destruct()  
    {  
        echo "destroy.....";  
    }  
}  
$obj= new demo1();  //Kết quả : constructor1...constructor2...destroy.....
                    // destroy được in ra khi đối tượng $obj bị hủy


// Toán tử gán
    $number = 5;  // Gán giá trị 5 cho biến $number
    echo $number; // In giá trị của biến $number 
       //KQ : 5
    
    $number = 5;  // Gán giá trị 5 cho biến $number
    $number += 3; // Gán giá trị mới cho $number bằng cách cộng 3 vào giá trị hiện tại của $number
    echo $number; // In giá trị của biến $number
          //Kết quả : 8
// Hàm tạo và đối tượng thành phần
// Các thành phần tĩnh
    class Math {
        public static $pi = 3.14;

        public static function getPi() {
            return self::$pi;
        }
    }

    // Truy cập thuộc tính tĩnh từ bên ngoài lớp
    echo Math::$pi; // In ra: 3.14
    echo Math::getPi(); // In ra: 3.14
// Mảng đối tượng
    class Person {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function greet() {
            echo "Hello, my name is " . $this->name . "\n";
        }
    }

    // Tạo mảng để lưu trữ các đối tượng Person
    $people = [];

    // Thêm các đối tượng Person vào mảng
    $people[] = new Person("A");
    $people[] = new Person("B");
    
    // Duyệt qua mảng và gọi phương thức greet() cho mỗi đối tượng
    foreach ($people as $person) {
        $person->greet();//Kết qyar :Hello, my name is A ,Hello, my name is B
    }
// Cấp phát bộ nhớ cho đối tượng
    class SimpleClass {
        public $property;

        public function __construct($value) {
            $this->property = $value;
        }

        public function display() {
            echo "Property value: " . $this->property . "\n";
        }
    }

    // Cấp phát bộ nhớ cho đối tượng
    $object = new SimpleClass("Hello, World!");

    // Sử dụng đối tượng
    $object->display();//Kết quả :Property value: Hello, World!


?>