<?php
/*
6. Overloading and virtual methods (Polymorphism in OOP)
static method
limitation of static methods
virtual methods and multiple correspondences
Abtraction Class (Tính trừu tượng - Abstraction in OOP)
Use multiple correspondence and virtual methods
handle different algorithms
*/ 

// static method

    class Math {
        // define
        public static function Tong($a, $b) {
            return $a + $b;
        }

        public static function Tich($a, $b) {
            return $a * $b;
        }
    }

    // 
    $sum = Math::Tong(5, 10);
    $product = Math::Tich(5, 10);

    echo "SUM: " . $sum . "\n";        // Result: SUM: 15
    echo "TICH: " . $product . "\n";    // Result: TICH: 50

// and multiple correspondences

        class Person {
            // virtual methods 
            public function job() {
                echo "Parttime\n";
            }
        }

        class Doctor extends Person {
            // overwrite
            public function job() {
                echo "fulltime\n";
            }
        }

        class Engineer extends Person {
            // overwrite
            public function job() {
                echo "ABCD\n";
            }
        }

        // usedused
        $person = new Person();
        $person->job(); // Output: parttime

        $doctor = new Doctor();
        $doctor->job(); // Output: fulltime

        $engineer = new Engineer();
        $engineer->job(); // Output: ABCD


// Abtraction Class (Tính trừu tượng - Abstraction in OOP)
        // Define abstract class
        abstract class Employee {
            protected $name;
            protected $salary;

            public function __construct($name, $salary) {
                $this->name = $name;
                $this->salary = $salary;
            }

            // abstract method
            abstract public function calculateBonus();

            public function getDetails() {
                return "Name: $this->name, Salary: $this->salary";
            }
        }

        // Class: Manager
        class Manager extends Employee {
            public function calculateBonus() {
                return $this->salary * 0.10; // Bonus: 10% salary
            }
        }

        // 
        $manager = new Manager("NguyenVanA", 50000);
        echo $manager->getDetails() . "\n"; // Output: Name: NguyenVanA, Salary: 50000
        echo "Bonus: " . $manager->calculateBonus() . "\n"; // Output: Bonus: 5000


// Use multiple correspondence and virtual methods

        // DefineDefine
        abstract class Employee {
            protected $name;
            protected $baseSalary;

            public function __construct($name, $baseSalary) {
                $this->name = $name;
                $this->baseSalary = $baseSalary; 
            }

            // Abstract method
            abstract public function calculateSalary();

            public function getDetails() {
                return "Employee: $this->name, Salary: $this->baseSalary VNĐ"; 
            }
        }

        // Class: FullTimeEmployee
        class FullTimeEmployee extends Employee {
            public function calculateSalary() {
                return $this->baseSalary; // hardsalary
            }
        }

        // class: PartTimeEmployee
        class PartTimeEmployee extends Employee {
            private $hoursWorked;
            private $hourlyRate;

            public function __construct($name, $baseSalary, $hoursWorked, $hourlyRate) {
                parent::__construct($name, $baseSalary);
                $this->hoursWorked = $hoursWorked;
                $this->hourlyRate = $hourlyRate;
            }

            public function calculateSalary() {
                return $this->hoursWorked * $this->hourlyRate; // Calculate hourly salary
            }
        }

        // used class
        $employees = [];
        $employees[] = new FullTimeEmployee("Nguyen Van A", 50000); // hardsalary
        $employees[] = new PartTimeEmployee("NVB", 0, 20, 20000); // hourly salary

        // 
        foreach ($employees as $employee) 
            echo $employee->getDetails() . "\n"; // Display employee information
            echo "Calculated Salary: " . $employee->calculateSalary() . " VNĐ\n"; //show salary
        }
        //Result :
        // Employee: Nguyen Van A, Salary: 50000 VNĐ
        // Calculated Salary: 50000 VNĐ
        // Employee: Bob, Salary: 0 VNĐ
        // Calculated Salary: 400000 VNĐ

?>