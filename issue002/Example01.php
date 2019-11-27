<?php

/* 
 * Points available
 * Print out the list of these Points
 * @author DanhNC
 */

/**
 * Description of Point
 */
class Point {
    public $x;
    public $y;
    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }
    /**
     * Print point
     * Example: 1 : 1 
     */
    public function printPoint() {
        echo $this->x . " : " . $this->y;
    }
}

/**
 * Description of List of Point
 */
class ListPoints {
    /**
     *
     * @var Point
     */
    public $points = [];
    
    function __construct() {
        $arrX = [1, 3, 5, 7, 9];
        $arrY = [2, 4, 6, 8, 10];
        for ($ii = 0; $ii < count($arrX); $ii++) {
            $this->points[] = new Point($arrX[$ii], $arrY[$ii]);
        }
    }
    
    /**
     * Print list of Point
     * Example: 1 : 1
     *          2 : 2
     *          5 : 8
     */
    public function print() {
        foreach ($this->points as $value) {
            $value->printPoint();
            echo "<br/>";
        }
    }
}

$circle = new ListPoints;
$circle->print();


