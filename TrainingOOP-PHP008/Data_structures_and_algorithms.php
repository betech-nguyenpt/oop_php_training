<?php

// 8. Data Structures & Algorithms
// Stack and Queue
// Link List
// sorting algorithm



//Stack and Queue

        class Person {
            private $name;
            private $age;

            /**
             * Person constructor
             * @param string $name Person name
             * @param int $age Person age
             */
            public function __construct($name, $age) {
                $this->name = $name;
                $this->age = $age;
            }
            /**
             * Display person's information
             * @return string Person's information
             */
            public function displayInfo() {
                return sprintf("Name: %s, Age: %d", $this->name, $this->age);
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

       printf("Top person: %s\n", $stack->peek()->displayInfo()); // Output: Top person: Name: NVC, Age: 40
        printf("Popped person: %s\n", $stack->pop()->displayInfo()); // Output: Popped person: Name: NVC, Age: 40


// Link list

        class Person {
            private $name;
            private $age;
            
            /**
             * Person constructor
             * @param string $name Person name
             * @param int $age Person age
             */
            public function __construct($name, $age) {
                $this->name = $name;
                $this->age = $age;
            }

            /**
             * Display person's information
             * @return string Person's information
             */
            public function displayInfo() {
                return sprintf("Name: %s, Age: %d", $this->name, $this->age);
            }
        }

        class Node {
            public $data;
            public $next;

            /**
             * Node constructor
             * @param Person $data The person data for the node
             */
            public function __construct($data) {
                $this->data = $data;
                $this->next = null;
            }
        }

        class LinkedList {
            private $head = null;
            
             /**
             * Append a new person to the linked list
             * @param Person $data The person to append
             */
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
            /**
             * Display all persons in the linked list
             */
            public function display() {
                $current = $this->head;
                while ($current !== null) {
                    printf("%s\n", $current->data->displayInfo());
                    $current = $current->next;
                }
            }
        }

        // Example
        $list = new LinkedList();
        $list->append(new Person("NguyenVanA", 30));
        $list->append(new Person("NguyenVanB", 25));
        $list->append(new Person("NguyenVanC", 40));

        $list->display(); 
        // Result
        // Name: NguyenVanA, Age: 30
        // Name: NguyenVanB, Age: 25
        // Name: NguyenVanC, Age: 40


// Sorting algorithm


        /**
         * Quick sort algorithm
         * @param array $my_array The array to sort
         * @return array The sorted array
         */
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
        printf("Before: %s\n", implode(',', $my_array));
        $my_array = quick_sort($my_array);  
        printf("After: %s\n", implode(',', $my_array));
        // Before: 3,0,2,5,-1,4,1<br> After: -1,0,1,2,3,4,5

//Selection-sortsort

        /**
         * Selection sort algorithm
         * @param array $data The array to sort
         * @return array The sorted array
         */
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
        printf("Before: \n");
        printf("%s\n", implode(', ', $my_array));
        printf("After:\n");
        printf("%s\n", implode(', ', selection_sort($my_array)));
        //Kết quả :Before: <br>3, 0, 2, 5, -1, 4, 1<br>After:<br>-1, 0, 1, 2, 3, 4, 5

?>