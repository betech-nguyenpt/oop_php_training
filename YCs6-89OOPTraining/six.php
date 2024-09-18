<?php
/*
6. Tương ứng bội và phương thức ảo (Tính đa hình - Polymorphism in OOP)

Phương thức tĩnh
Sự hạn chế của phương thức tĩnh
Phương thức ảo và tương ứng bội
Lớp cơ sở trừu tượng (Tính trừu tượng - Abstraction in OOP)
Sử dụng tương ứng bội và phương thức ảo
Xử lý các thuật toán khác nhau
*/ 

// Phương thức tĩnh

    class Math {
        // Định nghĩa phương thức tĩnh
        public static function Tong($a, $b) {
            return $a + $b;
        }

        public static function Tich($a, $b) {
            return $a * $b;
        }
    }

    // Gọi phương thức tĩnh mà không cần tạo đối tượng
    $sum = Math::Tong(5, 10);
    $product = Math::Tich(5, 10);

    echo "Tổng: " . $sum . "\n";        // In ra: Tổng: 15
    echo "Tích: " . $product . "\n";    // In ra: Tích: 50

// Sự hạn chế của phương thức tĩnh

// Phương thức ảo và tương ứng bội

        class Person {
            // Phương thức ảo
            public function job() {
                echo "Parttime\n";
            }
        }

        class Doctor extends Person {
            // Ghi đè phương thức ảo
            public function job() {
                echo "fulltime\n";
            }
        }

        class Engineer extends Person {
            // Ghi đè phương thức ảo
            public function job() {
                echo "ABCD\n";
            }
        }

        // Sử dụng
        $person = new Person();
        $person->job(); // Output: parttime

        $doctor = new Doctor();
        $doctor->job(); // Output: fulltime

        $engineer = new Engineer();
        $engineer->job(); // Output: ABCD


// Lớp cơ sở trừu tượng (Tính trừu tượng - Abstraction in OOP)
        // Định nghĩa lớp cơ sở trừu tượng
        abstract class Employee {
            protected $name;
            protected $salary;

            public function __construct($name, $salary) {
                $this->name = $name;
                $this->salary = $salary;
            }

            // Phương thức trừu tượng
            abstract public function calculateBonus();

            public function getDetails() {
                return "Name: $this->name, Salary: $this->salary";
            }
        }

        // Lớp con: Manager
        class Manager extends Employee {
            public function calculateBonus() {
                return $this->salary * 0.10; // Tiền thưởng: 10% lương
            }
        }

        // Sử dụng các lớp
        $manager = new Manager("NguyenVanA", 50000);
        echo $manager->getDetails() . "\n"; // Output: Name: NguyenVanA, Salary: 50000
        echo "Bonus: " . $manager->calculateBonus() . "\n"; // Output: Bonus: 5000
// Sử dụng tương ứng bội và phương thức ảo

        // Định nghĩa lớp cơ sở trừu tượng
        abstract class Employee {
            protected $name;
            protected $baseSalary;

            public function __construct($name, $baseSalary) {
                $this->name = $name;
                $this->baseSalary = $baseSalary; 
            }

            // Phương thức trừu tượng
            abstract public function calculateSalary();

            public function getDetails() {
                return "Employee: $this->name, Salary: $this->baseSalary VNĐ"; 
            }
        }

        // Lớp con: FullTimeEmployee
        class FullTimeEmployee extends Employee {
            public function calculateSalary() {
                return $this->baseSalary; // Lương cố định
            }
        }

        // Lớp con: PartTimeEmployee
        class PartTimeEmployee extends Employee {
            private $hoursWorked;
            private $hourlyRate;

            public function __construct($name, $baseSalary, $hoursWorked, $hourlyRate) {
                parent::__construct($name, $baseSalary);
                $this->hoursWorked = $hoursWorked;
                $this->hourlyRate = $hourlyRate;
            }

            public function calculateSalary() {
                return $this->hoursWorked * $this->hourlyRate; // Tính lương theo giờ
            }
        }

        // Sử dụng các lớp
        $employees = [];
        $employees[] = new FullTimeEmployee("Nguyen Van A", 50000); // Lương cố định
        $employees[] = new PartTimeEmployee("NVB", 0, 20, 20000); // Lương theo giờ

        // Hiển thị thông tin và tính lương cho từng nhân viên
        foreach ($employees as $employee) 
            echo $employee->getDetails() . "\n"; // Hiển thị thông tin nhân viên
            echo "Calculated Salary: " . $employee->calculateSalary() . " VNĐ\n"; // Hiển thị lương
        }
        //Kết quả :
        // Employee: Nguyen Van A, Salary: 50000 VNĐ
        // Calculated Salary: 50000 VNĐ
        // Employee: Bob, Salary: 0 VNĐ
        // Calculated Salary: 400000 VNĐ

// Xử lý các thuật toán khác nhau

?>