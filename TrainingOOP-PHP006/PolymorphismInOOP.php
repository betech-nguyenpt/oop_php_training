<?php
/*
6. Overloading and virtual methods (Polymorphism in OOP)
Static method
Limitation of static methods
Virtual methods and multiple correspondences
Abstraction Class (Tính trừu tượng - Abstraction in OOP)
Use multiple correspondence and virtual methods
Handle different algorithms
*/ 

// Static method

        /**
         * Class Math providing static methods for mathematical operations
         */
        class Math {
            /**
             * Sum two numbers
             * @param int $a First number
             * @param int $b Second number
             * @return int Sum of the two numbers
             */
            public static function Sum($a, $b) {
                return $a + $b;
            }

            /**
             * Multiply two numbers
             * @param int $a First number
             * @param int $b Second number
             * @return int Product of the two numbers
             */
            public static function Product($a, $b) {
                return $a * $b;
            }
        }

        // Calculate sum and product
        $sum = Math::Sum(5, 10);
        $product = Math::Product(5, 10);

        printf("SUM: %d\n", $sum);        // Result: SUM: 15
        printf("PRODUCT: %d\n", $product); // Result: PRODUCT: 50


// Virtual methods and multiple correspondences

        /**
         * Class Person demonstrating virtual methods
         */
        class Person {
            /**
             * Job method to be overridden
             */
            public function job() {
                printf("Parttime\n");
            }
        }

        /**
         * Class Doctor extending Person
         */
        class Doctor extends Person {
            /**
             * Overriding job method
             */
            public function job() {
                printf("Fulltime\n");
            }
        }

        /**
         * Class Engineer extending Person
         */
        class Engineer extends Person {          
            /**
             * Overriding job method
             */
            public function job() {
                printf("ABCD\n");
            }
        }

        // Test job methods
        $person = new Person();
        $person->job(); // Output: Parttime

        $doctor = new Doctor();
        $doctor->job(); // Output: Fulltime

        $engineer = new Engineer();
        $engineer->job(); // Output: ABCD


// Abstraction Class (Abstraction in OOP)

        /**
         * Abstract class Employee
         */
        abstract class Employee {
            protected $name;
            protected $salary;

            /**
             * Employee constructor
             * @param string $name Name of the employee
             * @param float $salary Salary of the employee
             */
            public function __construct($name, $salary) {
                $this->name = $name;
                $this->salary = $salary;
            }

            /**
             * Abstract method to calculate bonus
             * @return float Bonus amount
             */
            abstract public function calculateBonus();

            /**
             * Get employee details
             * @return string Employee details
             */
            public function getDetails() {
                return sprintf("Name: %s, Salary: %.2f", $this->name, $this->salary);
            }
        }

        /**
         * Class Manager extending Employee
         */
        class Manager extends Employee {
            /**
             * Calculate the bonus for the manager
             * @return float Bonus amount
             */
            public function calculateBonus() {
                return $this->salary * 0.10; // Bonus: 10% salary
            }
        }

        // Create a manager object
        $manager = new Manager("NguyenVanA", 50000);
        printf("%s\n", $manager->getDetails()); // Output: Name: NguyenVanA, Salary: 50000
        printf("Bonus: %.2f\n", $manager->calculateBonus()); // Output: Bonus: 5000


// Use multiple correspondence and virtual methods

        /**
         * Abstract class Employee
         */
        abstract class Employee {
            protected $name;
            protected $baseSalary;

            /**
             * Employee constructor.
             * @param string $name Name of the employee
             * @param float $baseSalary Base salary of the employee
             */
            public function __construct($name, $baseSalary) {
                $this->name = $name;
                $this->baseSalary = $baseSalary; 
            }

            /**
             * Abstract method to calculate salary
             * @return float Calculated salary
             */
            abstract public function calculateSalary();

            /**
             * Get employee details
             * @return string Employee details
             */
            public function getDetails() {
                return sprintf("Employee: %s, Salary: %.2f VNĐ", $this->name, $this->baseSalary); 
            }
        }

        /**
         * Class FullTimeEmployee extending Employee
         */
        class FullTimeEmployee extends Employee {
            /**
             * Calculate the salary for a full-time employee
             * @return float Base salary
             */
            public function calculateSalary() {
                return $this->baseSalary; // Base salary
            }
        }

        /**
         * Class PartTimeEmployee extending Employee
         */
        class PartTimeEmployee extends Employee {
            private $hoursWorked;
            private $hourlyRate;

            /**
             * PartTimeEmployee constructor
             * @param string $name Name of the employee
             * @param float $baseSalary Base salary (not used for part-time)
             * @param int $hoursWorked Number of hours worked
             * @param float $hourlyRate Hourly rate
             */
            public function __construct($name, $baseSalary, $hoursWorked, $hourlyRate) {
                parent::__construct($name, $baseSalary);
                $this->hoursWorked = $hoursWorked;
                $this->hourlyRate = $hourlyRate;
            }

            /**
             * Calculate the salary for a part-time employee
             * @return float Calculated salary
             */
            public function calculateSalary() {
                return $this->hoursWorked * $this->hourlyRate; // Calculate hourly salary
            }
        }

        // Create an array of employees
            $employees = [];
            $employees[] = new FullTimeEmployee("Nguyen Van A", 50000); // Base salary
            $employees[] = new PartTimeEmployee("NVB", 0, 20, 20000); // Hourly salary

            // Display employee information
            foreach ($employees as $employee) {
                printf("%s\n", $employee->getDetails()); // Display employee information
                printf("Calculated Salary: %.2f VNĐ\n", $employee->calculateSalary()); // Show salary
            }
            /*
            Result:
            Employee: Nguyen Van A, Salary: 50000.00 VNĐ
            Calculated Salary: 50000.00 VNĐ
            Employee: NVB, Salary: 0.00 VNĐ
            Calculated Salary: 400000.00 VNĐ
            */

?>