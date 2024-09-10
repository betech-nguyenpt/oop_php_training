<?php
/*
Viết các dòng chú thích (comment)
Khai báo biến
Toán tử ép kiểu
Hằng có kiểu
Kiểu dữ liệu
Function - Biến tham chiếu
Function - Truyền giá trị cho hàm theo tham chiếu
Function - Hàm trả về các tham chiếu
Function - Đối có giá trị mặc định
Function - Định nghĩa chồng các hàm (Overloading)
Function - Định nghĩa chồng các toán tử*/ 


// Khai báo biến 

    $name = "John Doe";// Biến kiểu chuỗi
    $age = 30;// Biến kiểu số nguyên
    $height = 5.9;// Biến kiểu số thực
    $isActive = true;// Biến kiểu boolean
    $colors = ["red", "green", "blue"];// Biến kiểu mảng
    $arrX=[1,2,3,4,5];
    class Person {// Biến kiểu đối tượng
        public $firstName;
        public $lastName;
    }


//Toán tử ép kiểu :

    $string = "123";
    $integer = (int) $string; // Ép kiểu từ chuỗi sang số nguyên
    echo $integer; // Kết quả: 123

    $string = "45.67";
    $float = (float) $string; // Ép kiểu từ chuỗi sang số thực
    echo $float; // Kết quả: 45.67

    $integer = 100;
    $string = (string) $integer; // Ép kiểu từ số nguyên sang chuỗi
    echo $string; // Kết quả: "100"

    $float = 3.14;
    $string = (string) $float; // Ép kiểu từ số thực sang chuỗi
    echo $string; // Kết quả: "3.14"



//Hằng có kiểu"

// Kiểu dữ liệu
    //kiểu chuỗi
    $string = "Hello, World!";
    echo $string; // Kết quả: Hello, World!
    //Kiểu số nguyên
    $integer = 42;
    echo $integer; // Kết quả: 42
    //Kiểu số thực
    $float = 3.14159;
    echo $float; // Kết quả: 3.14159
    //Kiểu boolean
    $booleanTrue = true;
    $booleanFalse = false;
    echo $booleanTrue ? 'True' : 'False'; // Kết quả: True
    echo $booleanFalse ? 'True' : 'False'; // Kết quả: False
    //Kiểu mảng
    $array = [1, 2, 3];
    print_r($array);
    // Kết quả: Array([0] => 1
    //      [1] => 2
    //      [2] => 3)

//Function : Biến tham chiếu
    function doubleValue(&$value) {
        $value *= 2; // Nhân giá trị biến với 2
    }
    $num = 5;
    doubleValue($num); // Gọi hàm với biến $num theo tham chiếu
    echo $num; // Kết quả: 10
    //
    function swapValues(&$a, &$b) {
        $temp = $a;
        $a = $b;
        $b = $temp;
    }
    $x = 10;
    $y = 20;
    swapValues($x, $y); // Gọi hàm với hai biến $x và $y

    echo "x: $x\n"; // Kết quả: x= 20
    echo "y: $y\n"; // Kết quả: y=10

//Function - Truyền giá trị cho hàm theo tham chiếu
    
    function tangGT(&$value) {
        $value += 10; // Tăng giá trị biến lên 10
    }

    $num = 5;

    // In giá trị trước khi gọi hàm
    echo "Truoc: $num\n"; // Kết quả: Truoc: 5

    // Gọi hàm và truyền biến theo tham chiếu
    tangGT($num);

    // In giá trị sau khi gọi hàm
    echo "Sau: $num\n"; // Kết quả: Sau: 15

//Function - Đối có giá trị mặc định
    function GT($name = "Anh") {
        echo "Hello, $name!\n";
    }
    // Gọi hàm mà không truyền đối số
    GT(); // Kết quả: Hello, Anh!
    // Gọi hàm với đối số cụ thể
    GT("Alice"); // Kết quả: Hello, Alice!

//Function - Định nghĩa chồng các hàm (Overloading)
    class Number {
        public $value;

        // Constructor
        public function __construct($value) {
            $this->value = $value;
        }

        // Định nghĩa toán tử cộng
        public function __add($other) {
            return new Number($this->value + $other->value);
        }
        // Hiển thị đối tượng
        public function __toString() {
            return (string) $this->value;
        }
    }

    // Tạo các đối tượng Number
    $num1 = new Number(10);
    $num2 = new Number(5);

    // Sử dụng toán tử cộng
    $sum = $num1->__add($num2);
    echo "Sum: " . $sum . "\n"; // Kết quả: Sum: 15

?>