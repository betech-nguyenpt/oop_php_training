<?php

// 8. Cấu trúc dữ liệu và Giải thuật
// betech-nguyenpt edited this page on Oct 27, 2019 · 1 revision
// Các lớp ngăn xếp và hàng đợi
// Danh sách liên kết
// Giải thuật sắp xế



//Các lớp ngăn xếp và hàng đợi

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

        // Ví dụ sử dụng
        $stack = new Stack();
        $stack->push(new Person("NVA", 30));
        $stack->push(new Person("NVB", 25));
        $stack->push(new Person("NVC", 40));

        echo "Top person: " . $stack->peek()->displayInfo() . "\n"; // Output thông tin người trên cùng: Top person: Name: NVC, Age: 40
        echo "Popped person: " . $stack->pop()->displayInfo() . "\n"; // Output thông tin người bị xóa: Popped person: Name: NVC, Age: 40

// Danh sách liên kết
        // Định nghĩa lớp Con Người
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

        // Định nghĩa lớp Node cho Danh Sách Liên Kết
        class Node {
            public $data;
            public $next;

            public function __construct($data) {
                $this->data = $data;
                $this->next = null;
            }
        }

        // Định nghĩa lớp Danh Sách Liên Kết
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

        // Ví dụ sử dụng
        $list = new LinkedList();
        $list->append(new Person("NguyenVanA", 30));
        $list->append(new Person("NguyenVanB", 25));
        $list->append(new Person("NguyenVanC", 40));

        $list->display(); 
        // Kết quả
        // ame: NguyenVanA, Age: 30
        // Name: NguyenVanB, Age: 25
        // Name: NguyenVanC, Age: 40


// Giải thuật sắp xếp

        //Giải thuật sắp xếp nhanh
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
        echo 'Mảng ban đầu: '.implode(',',$my_array).'<br>';  
        $my_array = quick_sort($my_array);  
        echo 'Mảng sau khi được sắp xếp: '.implode(',',$my_array);
        //Kết quả :Mảng ban đầu: 3,0,2,5,-1,4,1<br>Mảng sau khi được sắp xếp: -1,0,1,2,3,4,5

//Giải thuật sắp xếp chọn
        
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
        echo "Mảng ban đầu: <br>";  
        echo implode(', ',$my_array );  
        echo "<br>Mảng đã qua sắp xếp:<br>";  
        echo implode(', ',selection_sort($my_array)). PHP_EOL;
        //Kết quả :Mảng ban đầu: <br>3, 0, 2, 5, -1, 4, 1<br>Mảng đã qua sắp xếp:<br>-1, 0, 1, 2, 3, 4, 5

?>