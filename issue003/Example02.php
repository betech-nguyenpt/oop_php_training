<?php

/*
 * Available Points (x,y)
 * The Triangle from these Points
 * Print the Triangle has max Perimeter
 * @author DanhNC
 */

/**
 * Description of Point
 */
class Point {

    /**
     * value of  X in Oxy
     * @var Number
     */
    public $x = 0;

    /**
     * Value of Y in Oxy
     * @var Number
     */
    public $y = 0;

    /**
     * Set value for x, y
     * @param Number $x
     * @param Number $y
     */
    function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Get distance between two Points
     * Example: 12.4
     * @param Point $point The second Point
     * @return Number Distance between two Points
     */
    public function distance($point) {
        $retVal = 0;
        $retVal = sqrt(pow($this->x - $point->x, 2) + pow($this->y - $point->y, 2));
        return $retVal;
    }

    /**
     * Print the point of Triangle
     * Example: A (1,1)
     */
    public function print() {
        return '(' . $this->x . ',' . $this->y . ')';
    }

}

// Description of Triangle
class Triangle {

    /**
     * Top of Triangle
     * @var Point 
     */
    public $pointA;

    /**
     * Top of Triangle
     * @var Point 
     */
    public $pointB;

    /**
     * Top of Triangle
     * @var Point
     */
    public $pointC;

    /**
     * Set value for Point A, B,C
     * @param Point $pointA Value of Point A
     * @param Point $pointB Value of Point B
     * @param Point $pointC Value of Point C
     */
    function __construct($pointA, $pointB, $pointC) {
        $this->pointA = $pointA;
        $this->pointB = $pointB;
        $this->pointC = $pointC;
    }

    /**
     * Print three points of Triangle
     * Example:  (1,2)-(2,4)-(3,1) 
     */
    public function print() {
        return '[' . $this->pointA->print() . ' - ' . $this->pointB->print() . ' - ' . $this->pointC->print() . '] = ' . $this->getPerimeter();
    }

    /**
     * Get the Perimeter of Triangle
     * @return int Perimeter of the Triangle
     */
    public function getPerimeter() {
        $retVal = 0;
        // Get AB length
        $lengthAB = $this->pointA->distance($this->pointB);
        // Get BC length
        $lengthBC = $this->pointB->distance($this->pointC);
        // Get AC length
        $lengthAC = $this->pointA->distance($this->pointC);

        $retVal = $lengthAB + $lengthAC + $lengthBC;
        return $retVal;
    }

}

// List of triangle
class ListTriangle {

    /**
     * Value of point
     * @var Point[] 
     */
    public $points = [];

    /**
     * List of Triangles
     * @var Triangle[]
     */
    public $triangles = [];

    /**
     * Set list of Point
     * Set list of Triangle from these Point
     */
    function __construct() {
        $arrX = [1, 2, 3, 4, 5, 16];
        $arrY = [1, 4, 7, 9, 5, 16];
        // Set list point from x,y
        for ($i = 0; $i < count($arrX); $i++) {
            $this->points[] = new Point($arrX[$i], $arrY[$i]);
        }
        // Set list triangle from list point
        for ($i = 0; $i < (count($this->points) - 2); $i++) {
            for ($j = $i + 1; $j < count($this->points); $j++) {
                for ($k = $j + 1; $k < count($this->points); $k++) {
                    $this->triangles[] = new Triangle($this->points[$i],
                                                      $this->points[$j],
                                                      $this->points[$k]);
                }
            }
        }
    }

    /**
     * Get position of triangle has max perimeter
     * @return Number
     */
    public function getMaxPerimeter() {
        $max = 0;
        for ($ii = 1; $ii < count($this->triangles); $ii++) {
            if ($this->triangles[$ii]->getPerimeter() > $this->triangles[$max]->getPerimeter()) {
                $max = $ii;
            }
        }
        return $max;
    }

    /**
     * Print three point of Triangle has MAX Perimeter
     * Example:  (1,2)-(2,4)-(3,1) 
     */
    public function printMax() {
        $max = 0;
        for ($ii = 1; $ii < count($this->triangles); $ii++) {
            if ($this->triangles[$ii]->getPerimeter() > $this->triangles[$max]->getPerimeter()) {
                $max = $ii;
            }
        }
        return $this->triangles[$max]->print();
    }

    /**
     * Print list of Triangles and their Perimeter
     * Example: (1,2)-(3-5)-(2-7) = 11.3333
     *          (2,4)-(4,7)-(3,10) = 19.777
     */
    public function printTriangles() {
        foreach ($this->triangles as $value) {
            echo $value->print() . '<br/>';
        }
    }

}

$obj = new ListTriangle;
$result = $obj->triangles[$obj->getMaxPerimeter()];
echo 'The max perimeter :' . $result->getPerimeter() . "<br/>";
echo 'The list of Triangles and Perimeters <br/>';
echo $obj->printTriangles();
echo 'The Triangle has max perimeter: <br/>';
echo $obj->printMax();

