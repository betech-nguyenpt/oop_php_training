<?php

/*
 * Students with name and point
 * Write function to sort the student list by Point, print out the list
 * 
 * @author DanhNC
 */

// Description of student
class Student {

    /**
     * Student's name
     * @var Char
     */
    public $name;

    /**
     * Student's point
     * @var Number
     */
    public $point;

    /**
     * Set value for student
     * @param Char $name Input name
     * @param Number $point Input point
     */
    public function __construct($name, $point) {
        $this->name = $name;
        $this->point = $point;
    }

    /**
     * Print student's value
     * Ex: (A: 8)
     */
    public function print() {
        echo '( ' . $this->name . ': ' . $this->point . ')<br/>';
    }

}

// Descrption of list student
class ListStudent {

    /**
     * List of student
     * @var Student[]
     */
    public $students = [];

    /**
     * Set value for list of student
     */
    public function __construct() {
        $arrName = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J'];
        $arrPoint = [5, 3, 8, 7, 10, 9, 1, 2, 4, 6];
        for ($ii = 0; $ii < count($arrName); $ii++) {
            $this->students[] = new Student($arrName[$ii], $arrPoint[$ii]);
        }
    }

    /**
     * Swap position in the list of student
     * @param Number $param01 Position of student 01
     * @param Number $param02 Position of student 02
     */
    public function swapStudent($param01, $param02) {
        $temp = $this->students[$param01];
        $this->students[$param01] = $this->students[$param02];
        $this->students[$param02] = $temp;
    }

    /**
     * Sort the list by Point
     * Method: Quick sort
     */
    public function sortListStudentByPoint() {
        for ($i = 0; $i < count($this->students); $i++) {
            $max = $this->students[$i]->point;
            for ($j = $i + 1; $j < count($this->students); $j++) {
                if ($max < $this->students[$j]->point) {
                    $max = $this->students[$j]->point;
                    $this->swapStudent($i, $j);
                }
            }
        }
        return $this->students;
    }
    
    /**
     * Sort the student list by Quick sort
     * @param Student[] $arr Input value
     * @return Student[]
     */
    public function functionQuickSort($arr) {
        if (count($arr) <= 1) {
            return $arr;
        } else {
            $pivot = $arr[0];
            $left = array();
            $right = array();
            for ($i = 1; $i < count($arr); $i++) {
                if ($arr[$i]->point < $pivot->point) {
                    $left[] = $arr[$i];
                } else {
                    $right[] = $arr[$i];
                }
            }
            return array_merge($this->functionQuickSort($left), array($pivot), $this->functionQuickSort($right));
        }
    }

    /**
     * Print out the list of student's value
     * Ex:  (E: 10)
     *      (A: 5)
     *      (B: 3)
     */
    public function print() {
        foreach ($this->students as $value) {
            $value->print();
        }
    }

}

$student = new ListStudent();
$student->sortListStudentByPoint();
echo 'Method Select sort: <br/>';
$student->print();
echo '<br/>';

$obj2 = new ListStudent;
$obj2->functionQuickSort($obj2->students);
echo 'Method Quick sort: <br/>';
$obj2->print(); 