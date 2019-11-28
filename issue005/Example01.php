<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Description of Point
class Point {

    /**
     * Point's X
     * @var Number
     */
    public $x;

    /**
     * Point's Y
     * @var Number
     */
    public $y;

    /**
     * Set value for a point
     * @param Number $x Value of X
     * @param Number $y Value of Y
     */
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
    }

    /**
     * Print a point
     * Example: (1,2)
     */
    public function print() {
        echo '(' . $this->x . ',' . $this->y . ')';
    }

    /**
     * Get distance to another point
     * @param Point $anotherPoint The point need to get distance
     * @return Number
     */
    public function distance($anotherPoint) {
        return sqrt(pow($this->x - $anotherPoint->x, 2) + pow($this->y - $anotherPoint->y, 2));
    }

}

//Description of shape
abstract class Shape {

    /**
     * Hexadecimals colors
     * @var Array
     */
    public $arrColor = [
        'white' => '#FFFFFF',
        'red' => '#FF0000',
        'black' => '#000000',
        'gray' => '#808080',
        'silver' => '#C0C0C0'
    ];

    abstract public function getPerimeter();

    abstract public function getArea();

    abstract public function print();

//    abstract public function validate($points);
    abstract public function draw($color = 'white');
}

// Description of polygon
class Polygon extends Shape {

    /**
     * List point
     * @var Point[] 
     */
    public $listPoints;

    /**
     * Set value for polygon's points
     * @param Point[] $points Input parameter
     */
    public function __construct(...$points) {
//        if ($this->validate($points)) {
        $this->listPoints = $points;
//        }
    }

    /**
     * Get polygon Perimeter
     * @return Number
     */
    public function getPerimeter() {
        $retVal = $this->listPoints[0]->distance($this->listPoints[count($this->listPoints) - 1]);
        for ($i = 0; $i < count($this->listPoints); $i++) {
            $retVal += $this->listPoints[$i]->distance($this->listPoints[$i + 1]);
        }
        return $retVal;
    }

    /**
     * Get area
     * @return Number
     */
    public function getArea() {
        return 0;
    }

    /**
     * Get list point as array
     * @return Array
     */
    public function getListPointAsArray() {
        $arrVal = [];
        for ($i = 0; $i < count($this->listPoints); $i++) {
            $arrVal[] = $this->listPoints[$i]->x;
            $arrVal[] = $this->listPoints[$i]->y;
        }
        return $arrVal;
    }

    /**
     * Draw the polygon
     */
    public function draw($color = 'white') {
        return 'var poly = ' . json_encode($this->getListPointAsArray()) . ';
                var canvas2 = document.getElementById("myShape")
                var ctx = canvas2.getContext("2d");
                ctx.fillStyle = ' . json_encode(($this->arrColor[$color])) . '
                ctx.StrokeStyle = "#FF0000"

                ctx.beginPath();
                ctx.moveTo(poly[0], poly[1]);
                for (item = 2; item < poly.length - 1; item += 2) {
                    ctx.lineTo(poly[item], poly[item + 1])
                }
                ctx.moveTo(poly[0], poly[1]);
                ctx.lineTo(poly[poly.length - 2], poly[poly.length - 1]);
                ctx.stroke();
                ctx.fill();
                ctx.closePath(); ';
    }

    public function print() {
        foreach ($this->listPoints as $value) {
            $value->print();
        }
    }

}

//Description of triangle
class Triangle extends Polygon {

    /**
     * Get triangle perimeter
     */
    public function getPerimeter() {
        parent::getPerimeter();
    }

    /**
     * Get triangle area
     * @return Number
     * $p = 1/2 triangle perimeter
     */
    public function getArea() {
        $retVal = 0;
        $lengthAB = $this->listPoints[0]->distance($this->listPoints[1]);
        $lengthBC = $this->listPoints[1]->distance($this->listPoints[2]);
        $lengthAC = $this->listPoints[0]->distance($this->listPoints[2]);
        $p = ($this->getPerimeter()) / 2;
        $retval = sqrt($p * ($p - $this->lengthAB) * ($p - $this->lengthBC) * ($p - $this->lengthAC));
        return $retVal;
    }

}

//Description of rectangle
class Rectangle extends Polygon {

    /**
     * Get perimeter of rectangle
     */
    public function getPerimeter() {
        parent::getPerimeter();
    }

    /**
     * Get area of rectangle
     * @return Number
     */
    public function getArea() {
        $retval = 0;
        $lengthAB = $this->listPoints[0]->distance($this->listPoints[1]);
        $lengthBC = $this->listPoints[1]->distance($this->listPoints[2]);
        return $retval = $this->lengthAB * $this->lengthBC;
    }

}

// Description of square
class Square extends Rectangle {
    
}

class Rhombus extends Polygon {

    /**
     * Get perimeter of rhombus
     */
    public function getPerimeter() {
        parent::getPerimeter();
    }

    /**
     * Get area of rhombus
     * @return Number
     */
    public function getArea() {
        $retval = 0;
        return $retval = ($this->lengthAC * $this->lengthBD) / 2;
    }

}

// Description of circle
class Circle extends Shape {

    /**
     * Circle's center point
     * @var Point
     */
    public $centerPoint;

    /**
     * Circle's radius
     * @var Number
     */
    public $radius;

    /**
     * Set value for circle
     * @param Point $centerPoint Circle's center point
     * @param  Number $radius Circle's radius
     */
    public function __construct($centerPoint, $radius) {
        $this->centerPoint = $centerPoint;
        $this->radius = $radius;
    }

    /**
     * Get circle perimeter
     * @return Number
     */
    public function getPerimeter() {
        $reverVal = 0;
        return $retVal = 2 * $this->radius * pi();
    }

    /**
     * Get circle area
     * @return Number
     */
    public function getArea() {
        $retVal = 0;
        return $retVal = pow($this->radius, 2) * pi();
    }

    public function draw($color = 'white') {

        return 'var canvas1 = document.getElementById("myShape");
                var ctx = canvas1.getContext("2d");
                ctx.fillStyle = ' . json_encode($this->arrColor[$color]) . '
                ctx.beginPath();

                var x = ' . $this->centerPoint->x . ';
                var y = ' . $this->centerPoint->y . ';
                var r = ' . $this->radius . ';
                ctx.arc(x, y, r, 0, 2 * Math.PI);
                ctx.stroke();
                ctx.fill();
                ctx.closePath();';
    }

    /**
     * Print put the circle's properties
     * Ex: (300 , 150)r = 40 
     */
    public function print() {
        echo $this->centerPoint->print() . ' r = ' . $this->radius . '<br/>';
    }

}

class ListCircle extends Circle {

    /**
     * List of circle
     * @var Circle[]
     */
    public $circles = [];

    /**
     * Set list of circle
     * @param Point[] $point Input list of center points
     * @param Array $radius Input list radius
     */
    public function __construct($point, $radius) {
        for ($ii = 0; $ii < count($point); $ii++) {
            $this->circles[] = new Circle($point[$ii], $radius[$ii]);
        }
    }

    /**
     * Print out the list of circles
     * Ex: (300, 150) r = 40
     *     (200, 100) r = 100
     *     (100, 200) r = 50
     */
    public function print() {
        foreach ($this->circles as $value) {
            $value->centerPoint->print();
        }
    }

    /**
     * Draw all the circles in list
     * @param String $color Input color
     * @return String
     */
    public function draw($color = 'white') {
        $retVal = '';
        foreach ($this->circles as $value) {
            $retVal .= $value->draw($color);
        }
        return $retVal;
    }

    /**
     * Get the max area circle
     * @return int
     */
    public function getMaxAreaCircle() {
        $max = 0;
        for ($ii = 0; $ii < count($this->circles); $ii++) {
            if ($this->circles[$max]->getArea() < $this->circles[$ii]->getArea()) {
                $max = $ii;
            }
        }
        return $max;
    }

    /**
     * Color the max area circle
     * @param String $colorMax Input color
     * @return String
     */
    public function colorMaxAreaCircle($colorMax = 'red') {
        $circleMax = $this->getMaxAreaCircle();
        return $this->circles[$circleMax]->draw($colorMax);
    }

}

$p0 = new Point(300, 300);
$p1 = new Point(30, 30);
$p2 = new Point(30, 150);
$p3 = new Point(150, 150);
$p4 = new Point(20, 60);
$p5 = new Point(970, 30);
$p6 = new Point(970, 90);
$p7 = new Point(880, 90);
$p8 = new Point(880, 30);


//$circle = new Circle($p0, 50);
//$circle->print();
//
//$triangle = new Triangle($p1, $p2, $p3);
//
//$rectangle = new Rectangle($p5, $p6, $p7, $p8);
$circleList = new ListCircle([$p0, $p1, $p2, $p3], [20, 30, 35, 50]);
$circleList->draw();
$circleList->colorMaxAreaCircle('red');
?>

<canvas id="myShape" width="500" height="500"
        style="border:1px solid #d3d3d3;">
</canvas>
<script>
<?= $circleList->draw(); ?>
<?= $circleList->colorMaxAreaCircle('red'); ?>

</script>