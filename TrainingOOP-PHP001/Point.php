<?php
namespace TrainingOOPPHP001;

class Point {
    public $x;
    public $y;

    /**
     * Point constructor.
     *
     * @param float $x X-coordinate.
     * @param float $y Y-coordinate.
     */
    function __construct($x,$y){
        $this->x = $x;
        $this->y = $y;
    }
}
?>