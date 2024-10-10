<?php

// 8. Data Structures & Algorithms
// Stack and Queue
// Link List
// sorting algorithm



//Stack and Queue

        class Person {
            private $name;
            private $age;

            public function __construct($name, $age) {
                $this->name = $name;
                $this->age = $age;
            }

            public function displayInfo() {
                return "Name: $this->name, Age: $this->age";
            }
        }

        class Stack {
            private $elements = [];

            public function push($element) {
                array_push($this->elements, $element);
            }

            public function pop() {
                return array_pop($this->elements);
            }

            public function peek() {
                return end($this->elements);
            }

            public function isEmpty() {
                return empty($this->elements);
            }
        }

        // ExampleExample
        $stack = new Stack();
        $stack->push(new Person("NVA", 30));
        $stack->push(new Person("NVB", 25));
        $stack->push(new Person("NVC", 40));

        echo "Top person: " . $stack->peek()->displayInfo() . "\n"; // output the above person's information: Top person: Name: NVC, Age: 40
        echo "Popped person: " . $stack->pop()->displayInfo() . "\n"; // output deleted person information: Popped person: Name: NVC, Age: 40

// Link list

        class Person {
            private $name;
            private $age;

            public function __construct($name, $age) {
                $this->name = $name;
                $this->age = $age;
            }

            public function displayInfo() {
                return "Name: $this->name, Age: $this->age";
            }
        }

        class Node {
            public $data;
            public $next;

            public function __construct($data) {
                $this->data = $data;
                $this->next = null;
            }
        }

        class LinkedList {
            private $head = null;

            public function append($data) {
                $newNode = new Node($data);
                if ($this->head === null) {
                    $this->head = $newNode;
                    return;
                }
                $current = $this->head;
                while ($current->next !== null) {
                    $current = $current->next;
                }
                $current->next = $newNode;
            }

            public function display() {
                $current = $this->head;
                while ($current !== null) {
                    echo $current->data->displayInfo() . "\n";
                    $current = $current->next;
                }
            }
        }

        // example
        $list = new LinkedList();
        $list->append(new Person("NguyenVanA", 30));
        $list->append(new Person("NguyenVanB", 25));
        $list->append(new Person("NguyenVanC", 40));

        $list->display(); 
        // Result
        // ame: NguyenVanA, Age: 30
        // Name: NguyenVanB, Age: 25
        // Name: NguyenVanC, Age: 40


// sorting algorithm

        //Quick sorting algorithm
        function quick_sort($my_array)  
        {  
            $loe = $gt = array();  
            if(count($my_array) < 2)  
            {  
                return $my_array;  
            }  
            $pivot_key = key($my_array);  
            $pivot = array_shift($my_array);  
            foreach($my_array as $val)  
            {  
                if($val <= $pivot)  
                {  
                    $loe[] = $val;  
                } elseif ($val > $pivot)  
                {  
                    $gt[] = $val;  
                }  
            }  
            return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));  
        }  

        $my_array = array(3, 0, 2, 5, -1, 4, 1);  
        echo 'Before: '.implode(',',$my_array).'<br>';  
        $my_array = quick_sort($my_array);  
        echo 'After: '.implode(',',$my_array);
        // :Before: 3,0,2,5,-1,4,1<br> After: -1,0,1,2,3,4,5

//Selection-sortsort

        function selection_sort($data)  
        {  
        for($i=0; $i < count($data)-1; $i++) {  
            $min = $i;  
            for($j=$i+1; $j < count($data); $j++) {  
                if ($data[$j] < $data[$min]) {  
                    $min = $j;  
                }  
            }  
            $data = swap_positions($data, $i, $min);  
        }  
        return $data;  
        }  

        function swap_positions($data1, $left, $right) {  
            $backup_old_data_right_value = $data1[$right];  
            $data1[$right] = $data1[$left];  
            $data1[$left] = $backup_old_data_right_value;  
            return $data1;  
        }  
        $my_array = array(3, 0, 2, 5, -1, 4, 1);  
        echo "Before: <br>";  
        echo implode(', ',$my_array );  
        echo "<br>After:<br>";  
        echo implode(', ',selection_sort($my_array)). PHP_EOL;
        //Kết quả :Before: <br>3, 0, 2, 5, -1, 4, 1<br>After:<br>-1, 0, 1, 2, 3, 4, 5

?>