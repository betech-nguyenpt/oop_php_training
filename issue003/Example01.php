<?php

/*
 * 5 Rectangles with size (1,10),(2,9),(3,8),(4,7),(5,6)
 * get Max Area Rectangle
 */

//Description of rectangle
class Rectangle {

    /**
     * Width rectangle 
     * @var Number
     */
    public $width = 0;

    /**
     * Height rectangle
     * @var Number
     */
    public $height = 0;

    /**
     * Set value width and height
     * @param Number $width Rectangle width
     * @param Number $height Rectangle height
     */
    function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    /**
     * Get area of Rectangle
     * @return Number 
     */
    public function getArea() {
        return $this->width * $this->height;
    }

}

// Description of List rectangle
class ListRectangle {

    /**
     * List of rectangle
     * @var Rectangle
     */
    public $rectangle = [];

    /**
     * Set list of Rectangle
     */
    function __construct() {
        $arrayWidth = [1, 2, 3, 4, 5];
        $arrayHeight = [10, 9, 8, 7, 6];
        for ($i = 0; $i < count($arrayWidth); $i++) {
            $this->rectangle[] = new Rectangle($arrayWidth[$i], $arrayHeight[$i]);
        }
    }

    /**
     * Get max area of list Rectangle
     * @return Number
     */
    public function getMaxArea() {
        $max = $this->rectangle[0]->getArea();
        $widthMax = $this->rectangle[0]->width;
        $heightMax = $this->rectangle[0]->height;
        for ($ii = 1; $ii < count($this->rectangle); $ii++) {
            if ($max < $this->rectangle[$ii]->getArea()) {
                $max = $this->rectangle[$ii]->getArea();
                $widthMax = $this->rectangle[$ii]->width;
                $heightMax = $this->rectangle[$ii]->height;
            }
        }
        return $result = [$max, $widthMax, $heightMax];
    }
    /**
     * Get max are of list rectangle by another method
     * @return Number
     */
    public function getMaxArea2() {
        $max = 0;
        for ($ii = 1; $ii < count($this->rectangle); $ii++) {
            if ($this->rectangle[$max]->getArea() < $this->rectangle[$ii]->getArea()) {
                $max = $ii;
            }
        }
        return $max;
    }

}

$object = new ListRectangle();
echo 'Max Area:' . $object->getMaxArea()[0] . "<br/>";
echo 'Largest Rectangle has width :' . $object->getMaxArea()[1] . "<br/>";
echo 'Largest Rectangle has height :' . $object->getMaxArea()[2] . "<br/>";
$max = $object->rectangle[$object->getMaxArea2()];
echo 'Max Area:' . $max->getArea() . "<br/>";
echo 'Largest Rectangle has width :' . $max->width . "<br/>";
echo 'Largest Rectangle has height :' . $max->height . "<br/>";




