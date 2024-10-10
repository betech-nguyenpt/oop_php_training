<?php
/*
Constructor
The class has no constructor and default constructor
copy constructor
Destructor
assignment operator
constructor and component object
static components
object array
Memory Allocation for Objects*/

// Constructor

    class Person {
        public $name;
        public $age;

        // Constructor
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        // Information display method
        public function Info() {
            echo "Name: " . $this->name . ", Age: " . $this->age;
        }
    }

    // Create an object and pass parameters to the constructor
    $person1 = new Person("NguyenVanA", 25);
    $person1->Info();  // Output: Name: NguyenVanA, Age: 25

// The class has no constructor and default constructor

    class Person {
        public $name;
        public $age;
        // Information display method
        public function Info() {
            echo "Name: " . $this->name . ", Age: " . $this->age;
        }
    }
    //Create object
    $person1 = new Person();
    //assign value to attribute
    $person1 -> name = "NguyenVanA";
    $person1 ->age="25";
    //information display
    $person1->Info();  // Output: Name: NguyenVanA, Age: 25


// copy constructor'
    class Person {
        public $name;
        public $age;

        // Constructor
        public function __construct($name, $age) {
            $this->name = $name;
            $this->age = $age;
        }

        // copy function
        public function copy() {
            return new self($this->name, $this->age); // create a new object with the same value
        }
    }

    //create initial object
    $person1 = new Person("Alice", 25);

    // copy object
    $person2 = $person1->copy();

    // information display
    echo "Nhân sự ban đầu: " . $person1->name . ", " . $person1->age . "\n";  // Output: Original Person: NguyenVanA, 25
    echo "Nhân sự copy: " . $person2->name . ", " . $person2->age . "\n";    // Output: Copied Person: NguyenVanA, 25

//Destructor
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
$obj= new demo1();  //Result : constructor1...constructor2...destroy.....
                    // destroy is printed when the $obj object is destroyed


// Assignment operator
    $number = 5;  // Assign the value 5 to the variable $number
    echo $number; // print the value of variable number
       // : 5

    $number = 5;  // Assign the value 5 to the variable $number
    $number += 3; //Assign a new value to $number by adding 3 to the current value of $number
    echo $number; // print the value of variable number
          //result : 8



// static components
    class Math {
        public static $pi = 3.14;

        public static function getPi() {
            return self::$pi;
        }
    }

    // Access static properties from outside the class
    echo Math::$pi; // Output: 3.14
    echo Math::getPi(); // output: 3.14


//object array
    class Person {
        public $name;

        public function __construct($name) {
            $this->name = $name;
        }

        public function greet() {
            echo "Hello, my name is " . $this->name . "\n";
        }
    }

    // Create an array to store Person objects
    $people = [];

    // Add Person objects to the array
    $people[] = new Person("A");
    $people[] = new Person("B");

    // Iterate through the array and call the greet() method for each object
    foreach ($people as $person) {
        $person->greet();//ResultResult :Hello, my name is A ,Hello, my name is B
    }



// Allocate memory for the object
    class SimpleClass {
        public $property;

        public function __construct($value) {
            $this->property = $value;
        }

        public function display() {
            echo "Property value: " . $this->property . "\n";
        }
    }

    // Allocate memory for the object
    $object = new SimpleClass("Hello, World!");

    // Use object
    $object->display();//Result :Property value: Hello, World!


?>